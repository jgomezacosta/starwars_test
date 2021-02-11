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
    public function importData(Request $request)
    {
        $endpoint = "http://swapi.dev/api/starships";
        $client = new \GuzzleHttp\Client();

        $aux = true;

        while ($aux == true) {

            $response = $client->request('GET', $endpoint, ['query' => [
                'key1' => 0,
                'key2' => 0
            ]]);
            $statusCode = $response->getStatusCode();

            dd(json_decode($response->getBody(), true));

            exit;

            $content[] = json_decode($response->getBody(), true);

        }
    }
}
