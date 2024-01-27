<?php

namespace App\Commands\Telegram;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Libraries\TelegramBot;



class WebhookInit extends BaseCommand
{
    protected $group       = 'Telegram';
    protected $name        = 'webhook:init';
    protected $description = 'Initialization the webhook.';

    public function run(array $params)
    {

        try {
            $AccessToken = env("TELEGRAM_BOT_TOKEN");
            $Botname = env("TELEGRAM_BOT_USERNAME");
            $HookPath = env("TELEGRAM_BOT_HOOKPATH");

            if (!$AccessToken) {
                CLI::write("Not found the " . CLI::color("TELEGRAM_BOT_TOKEN", "light_yellow") . " in .env \n");
                return;
            }
            if (!$Botname) {
                CLI::write("Not found the " . CLI::color("TELEGRAM_BOT_USERNAME", "light_yellow") . " in .env \n");
                return;
            }

            if (!$HookPath) {
                CLI::write("Not found the " . CLI::color("TELEGRAM_BOT_HOOKPATH", "light_yellow") . " in .env \n");
                return;
            }

            $Bot = new TelegramBot($AccessToken, $Botname);


            $Bot->init_webhook(base_url($HookPath));

            CLI::write("Webhook Initiated Success \n", "green");
        } catch (\Throwable $th) {
            CLI::error($th->getMessage());

            CLI::write("\n");
        }
    }
}
