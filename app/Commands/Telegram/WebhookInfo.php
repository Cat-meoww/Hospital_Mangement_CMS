<?php

namespace App\Commands\Telegram;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Libraries\TelegramBot;



class WebhookInfo extends BaseCommand
{
    protected $group       = 'Telegram';
    protected $name        = 'webhook:info';
    protected $description = 'webhook the webhook.';

    public function run(array $params)
    {

        try {
            $AccessToken = env("TELEGRAM_BOT_TOKEN");
            $Botname = env("TELEGRAM_BOT_USERNAME");

            if (!$AccessToken) {
                CLI::write("Not found the " . CLI::color("TELEGRAM_BOT_TOKEN", "light_yellow") . " in .env \n");
                return;
            }
            if (!$Botname) {
                CLI::write("Not found the " . CLI::color("TELEGRAM_BOT_USERNAME", "light_yellow") . " in .env \n");
                return;
            }

            $Bot = new TelegramBot($AccessToken, $Botname);

            $table_data = json_decode($Bot->list_webhooks(), true);
            $trow = array_values($table_data);
            $thead = array_keys($table_data);
            CLI::table([$trow], $thead);
        } catch (\Throwable $th) {
            CLI::error($th->getMessage());

            CLI::write("\n");
        }
    }
}
