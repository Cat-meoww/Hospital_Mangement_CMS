<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

use Razorpay\Api\Api;


class Payments extends BaseController
{
    use ResponseTrait;
    public $date;
    private $razorpay_key;
    private $razorpay_secret;
    private $razorpay_webhook_secret;


    public function __construct()
    {
        $this->date = date("Y-m-d h:i:s");
        $this->razorpay_key = env('RAZORPAY_API_KEY');
        $this->razorpay_secret = env('RAZORPAY_API_SECRET');
        $this->razorpay_webhook_secret = env('RAZORPAY_WEBHOOK_SECRET');
    }
    public function webhook_handler()
    {
        try {

            $Payload = $this->request->getJSON(true);
            $PayloadBody = file_get_contents('php://input');
            $Razorpay_Signature = $Payload['Razorpay_Signature'] = $this->request->getHeaderLine('X-Razorpay-Signature');
            $rules = [
                'event' => 'in_list[payment.failed,payment.captured]',
                'payload.payment.entity.order_id' => 'required',
                'Razorpay_Signature' => "required"
            ];

            if (!$this->validateData($Payload, $rules)) {
                throw new \Exception("Invalid payload");
            }
            if (!$this->verifyWebhookSignature($PayloadBody, $Razorpay_Signature)) {
                throw new \Exception("Invalid signature");
            }


            $event = $this->request->getVar('event');
            $method = $this->request->getVar('payload.payment.entity.method');
            $order_id = $this->request->getVar('payload.payment.entity.order_id');
            $Payments = new \App\Models\Payments();
            
            switch ($event) {
                case 'payment.failed':
                    $Payments->where('order_id',$order_id)->set(['status'=>'FAILED','method'=>$method])->update();
                    break;
                case 'payment.captured':
                    $Payments->where('order_id',$order_id)->set(['status'=>'SUCCESS','method'=>$method])->update();
                    break;
                
                default:
                    # code...
                    break;
            }
            
        
            return $this->respond([
                'status' => 'ok',
            ]);
        } catch (\Exception $e) {
            return $this->respond([
                'status' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    private function verifyWebhookSignature(string $Payload, string $Signature)
    {
        try {
            $api = new Api($this->razorpay_key, $this->razorpay_secret);
            $api->utility->verifyWebhookSignature($Payload, $Signature, $this->razorpay_webhook_secret);
            return true;
        } catch (\Exception $th) {
            return false;
        }
    }
}
