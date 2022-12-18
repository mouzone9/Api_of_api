<?php

namespace App\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HotelApi
{
    public function __construct(
        private HttpClientInterface $client 
    ) {
    }

    public function getHotelData()
    {
        $response = $this->client->request(
            "GET",
            'https://hotels4.p.rapidapi.com/get-meta-data',
            [
                "headers" => [
                    "X-RapidAPI-Key" => "81c874cc70msha8b879f7ee7ed7cp1c46f3jsn7db01087a9aa"
                ]
            ]
        );

        $content = $response->getContent();

        return $content;
    }
}
