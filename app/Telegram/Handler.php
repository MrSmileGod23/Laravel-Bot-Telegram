<?php

namespace App\Telegram;

use DefStudio\Telegraph\Handlers\WebhookHandler;
use Illuminate\Support\Facades\Http;

class Handler extends WebhookHandler
{
    public function statusc(): void
    {

        $breeds = Http::withHeaders([
            'Accept-Language' => 'ru',
        ])->get('https://api.warframestat.us/pc/cetusCycle');
        $this->reply(message: $breeds['state']);
    }

}
