<?php

namespace App\Services;

use Carbon\Carbon;

class TelegramService
{
    protected $botToken;
    protected $chatId;

    public function __construct()
    {
        $this->botToken = '1003841319:AAHdNdofq9fE7YoVhcvQwhnHpsHTNUwn-98';

        $this->chatId = '-551769527';
    }

    public function sendMessage($message)
    {
        $url = 'https://api.telegram.org/bot' . $this->botToken . '/sendMessage?chat_id=' . $this->chatId . '&parse_mode=HTML&text=' . urlencode($message);
        @file_get_contents($url);
    }
}
