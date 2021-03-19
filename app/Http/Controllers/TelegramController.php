<?php

namespace App\Http\Controllers;

use App\Services\TelegramService;
use Carbon\Carbon;

class TelegramController extends Controller
{
    public function sendMessage()
    {
        $anni = Carbon::create('24-8-2020');
        $now  = Carbon::now()->format('d-m-Y');

        $days = $anni->diffInDays($now);
        $message = "Ngày:<b> $now </b>Tui chỉ muốn nói là tui yêu emmmmmmmmm nhiều lắm luôn á. Được <b><u>$days</u></b> ngày quen nhau rồi nè :))) ❤️";
        //
        return (new TelegramService())->sendMessage($message);
    }
}
