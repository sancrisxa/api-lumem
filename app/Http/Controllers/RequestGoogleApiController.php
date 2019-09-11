<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class RequestGoogleApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function getGuzzleRequest()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://storage.googleapis.com/dito-questions/events.json', 
            ['headers' => 
                ['Accept' => 'application/json','Content-type' => 'application/json']
            ]);

         return $res->getBody()->getContents();

    }
}
