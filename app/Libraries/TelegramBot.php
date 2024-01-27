<?php

namespace App\Libraries;

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use Exception;

class TelegramBot
{
    private $Token;
    private $Botname;
    private $telegram;
    public function __construct(String $AccessToken, string $Botname)
    {
        $this->Token = $AccessToken;
        $this->Botname = $Botname;

        $this->telegram = new Telegram($this->Token, $Botname);

        $this->TokenHealth();
    }

    public function TokenHealth()
    {
        $info = Request::getMe();
        if ($info->isOk()) {
            return $info->getResult();
        } else {
            throw new Exception($info->getDescription());
        }
    }

    public function get_instance()
    {
        return $this->telegram;
    }

    public function init_webhook(string $webhookUrl)
    {
        return $this->telegram->setWebhook($webhookUrl);
    }

    public function list_webhooks()
    {
        $info = Request::getWebhookInfo();

        if ($info->isOk()) {
            return $info->getResult();
        } else {
            throw new Exception($info->getDescription());
        }
    }

    public function destroy_webhook()
    {
        $result = Request::deleteWebhook(['token' => $this->Token]);

        if ($result->isOk()) {

            return $result->getResult();
        } else {
            throw new Exception($result->getDescription());
        }
    }
}
