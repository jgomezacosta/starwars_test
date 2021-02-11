<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportDataSWAPI extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function importData($data)
    {
        $endpoint = "http://swapi.dev/api/starships";
        $client = new \GuzzleHttp\Client();

        $aux = true;

        while ($aux == true) {

            $response = $client->request('GET', $endpoint);
            $statusCode = $response->getStatusCode();

            dd(json_decode($response->getBody(), true));

            exit;

            $content[] = json_decode($response->getBody(), true);

        }
    }
}
