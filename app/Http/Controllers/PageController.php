<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //TODO - research guzzle to try and call an api from the controller and then pass the data to a view partial!!!
        
        // $client = new Client();
        // $res = $client->request('GET', '/api/01');

        // $result= $res->getBody();
        // ddd($result);
        return view('welcome');

        // return 'hello world';
    }
}
