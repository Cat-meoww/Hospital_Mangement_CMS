<?php

namespace App\Controllers;

use App\Libraries\TelegramBot;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use Longman\TelegramBot\Telegram as TelegramService;
use Longman\TelegramBot\Request;

class Telegram extends BaseController
{

    use ResponseTrait;

    public $token;
    public $date;
    public $username;

    private $telegram;
    public function __construct()
    {
        // env start
        $this->date = date("Y-m-d H:i:s");
        $this->token = env('TELEGRAM_BOT_TOKEN');
        $this->username = env('TELEGRAM_BOT_USERNAME');

        // Instantiate the Telegram object
        $this->telegram = new TelegramService($this->token, $this->username);
    }

    public function webhook()
    {

        try {
            // Read incoming update from Telegram
            $input = file_get_contents('php://input');
            $update = json_decode($input, true);

            // Process the incoming update
            $handler = $this->telegram->handle();

            // Send a response back to Telegram (optional)

            //$this->telegram->getChat();
            $response = 'echos ';
            $chatId = $update['message']['chat']['id'];

            // $data = [
            //     'chat_id'      => $chatId,
            //     'text'         => 'Please provide your phone number:',
            //     'reply_markup' => json_encode([
            //         'keyboard'          => [[['text' => 'Share Contact', 'request_contact' => true]]],
            //         'resize_keyboard'   => true,
            //         'one_time_keyboard' => true,
            //     ]),
            // ];

            // Request::sendMessage($data);

            // List of available categories
            // $categories = ['Category 1', 'Category 2', 'Category 3'];

            // // Create a keyboard with categories
            // $keyboard = [
            //     'keyboard' => array_map(function ($category) {
            //         return [['text' => $category]];
            //     }, $categories),
            //     'resize_keyboard' => true,
            //     'one_time_keyboard' => true,
            // ];

            // // Send message with keyboard
            // $message = 'Please select a category:';
            // $data = [
            //     'chat_id' => $chatId,
            //     'text' => $message,
            //     'reply_markup' => json_encode($keyboard),
            // ];

            // Request::sendMessage($data);




            // Create menu buttons
            $button1 = ['text' => 'Contact', "request_contact" => true,];
            $button2 = ['text' => 'Location', "request_location" => true];
            $button3 = ['text' => 'Button 3'];

            // Create a keyboard with the buttons
            $keyboard = [
                [$button1],
                [$button2, $button3],
            ];

            // Convert the keyboard to a JSON string
            $replyMarkup = json_encode(['keyboard' => $keyboard, 'resize_keyboard' => true, 'selective' => true, 'one_time_keyboard' => false]);

            // Send message with the keyboard
            $message = 'Choose an option:';
            $data = [
                'chat_id' => $chatId,
                'text' => $message,
                'ReplyKeyboardMarkup' => $replyMarkup,
            ];

            Request::sendMessage($data);
            $this->respond([
                'status' => "success"
            ]);
        } catch (\Throwable $th) {
            $this->respond([
                'status' => "bad",
                "msg" => $th->getMessage(),
            ]);
        }
    }
}
