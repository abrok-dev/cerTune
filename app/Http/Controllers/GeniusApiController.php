<?php

namespace App\Http\Controllers;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Illuminate\Http\Request;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Client as GuzzleClient;
class GeniusApiController extends Controller
{

    public $token ='oDhirON1HY6Rwh1JyxyCdaAzTtdEO7a0XRbCnxMKK3O54SuMvVoctR_EKWU8cGOq';

    public function searchData($query,$page=10)
    {
        $header = [
            'Authorization'  => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $client = new GuzzleClient([
            'headers' => $header
        ]);
        $data = $client->request('GET' , 'https://api.genius.com/search?&q=' . $query .'&per_page='. $page);
            


        return $data->getBody();

        
    }

    public function updateToken(){

            $client_id = 'CNXu6KT2HdLJ753-UgsdOxvcoYELyJJn87xm51c1CBuC7nBJyVsdytPMHV2gV8dQ';
            $code = '95.28.113.45';
            $scope = 'me';

    }
}


