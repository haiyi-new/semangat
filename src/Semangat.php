<?php

namespace Teknohaiyi\Semangat;

use Illuminate\Support\Facades\Http;

class Semangat {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}
