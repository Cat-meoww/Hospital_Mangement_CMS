<?php

namespace App\Commands\Telegram;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

use App\Libraries\TelegramBot;

class WebhookDestroy extends BaseCommand
{
    protected $group       = 'Telegram';
    protected $name        = 'webhook:destroy';
    protected $description = 'Destorying the webhook.';

    public function run(array $params)
    {

        try {
            $AccessToken = env("TELEGRAM_BOT_TOKEN");
            $Botname = env("TELEGRAM_BOT_USERNAME");

            if (!$AccessToken) {
                CLI::write("Not found the '" . CLI::color("TELEGRAM_BOT_TOKEN", "light_yellow") . "' in .env \n");
                return;
            }
            if (!$Botname) {
                CLI::write("Not found the " . CLI::color("TELEGRAM_BOT_USERNAME", "light_yellow") . " in .env \n");
                return;
            }
            
            $Bot = new TelegramBot($AccessToken, $Botname);
            $Bot->destroy_webhook();

            CLI::write("Webhook deleted successfully. \n", "green");
        } catch (\Throwable $th) {
            CLI::error($th->getMessage());
            CLI::write("\n");
        }
    }
}
