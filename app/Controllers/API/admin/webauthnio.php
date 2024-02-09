<?php

namespace App\Controllers\API\admin;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;
use CBOR\CBOREncoder;
use CBOR\Decoder;
use CBOR\StringStream;
use CBOR\MapObject;


class webauthnio extends General
{
    use ResponseTrait;
    public function __construct()
    {
        parent::__construct();
    }




    public function register()
    {
        try {


            $UserModel = new \App\Models\UserModel();

            $user = $UserModel->find($this->session->user_id);
            $challenge = base64_encode(openssl_random_pseudo_bytes(32));
            $id = base64_encode($user['uuid']);
            $this->session->set('webauthn_challenge', $challenge);
            $this->session->set('webauthn_username', $user['firstname']);


            $data = [
                'challenge' => $challenge,
                'rp' => [
                    'name' => 'FIDO Examples Corporation'
                ],
                'user' => [
                    'id' => $id,
                    'name' => $user['firstname'],
                    'displayName' => env('app.name')
                ],
                "pubKeyCredParams" => [
                    [
                        'type' => "public-key", 'alg' => -7
                    ],
                    [
                        'type' => "public-key", 'alg' => -257
                    ]
                ]
            ];
            return $this->respond([
                'status' => "success",
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }


    public function response()
    {

        try {

            $payload = $this->request->getJSON(true);


            $rules = [
                'id' => 'required',
                'rawId' => 'required|matches[id]',
                'response.attestationObject' => 'required',
                'response.clientDataJSON' => 'required',
                'type' => 'required|in_list[public-key]',
            ];

            if ($this->validateData($payload, $rules)) {
                $data = $this->validator->getValidated();

                $clientDataJSON = $this->request->getJsonVar('response.clientDataJSON');
                $attestationObject = $this->request->getJsonVar('response.attestationObject');
                $clientData = json_decode(base64_decode($clientDataJSON));


                $binaryData = base64_decode(str_replace(['-', '_'], ['+', '/'], $attestationObject));



                // Step 2: Parse binary data as CBOR

                $decoder = Decoder::create();
                $decodedData = $decoder->decode(StringStream::create($binaryData));
                // print_r($decodedData->count());

                print_r($decodedData->normalize());

                die;



                if (!$this->compareChallenge($clientData->challenge ?? '', $this->session->get('webauthn_challenge'))) {
                    throw new \Exception("Invalid Challenge");
                } else {
                    return $this->respond([
                        'status' => "success",
                        'data' => $data,
                        'attestationObject' => $decodedData,
                        "clientData" => $clientData,
                        'challenge' => $this->session->get('webauthn_challenge'),
                    ]);
                }
            } else {


                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }

    private function compareChallenge($string1, $string2)
    {
        $string1 = str_replace(['-', '_'], ['+', '/'], $string1);
        $string2 = str_replace(['-', '_'], ['+', '/'], $string2);
        $decodedData1 = base64_decode($string1);
        $decodedData2 = base64_decode($string2);


        if ($decodedData1 === $decodedData2) {
            return true;
        }
        return false;
    }

    private function handle_exception(\Exception $e)
    {
        $data = ['status' => 'bad'];
        $data['message'] = $e->getMessage();
        $data['errors'] = $e->getMessage();
        return $this->respond($data);
    }
}
