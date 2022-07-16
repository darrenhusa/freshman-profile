<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class PageController extends Controller
{
    public function index()
    {
        //TODO - research guzzle to try and call an api from the controller and then pass the data to a view partial!!!
        // $response = Http::timeout(180)->get('http://localhost:8000/api/01');
        // $response = Http::withHeaders(['Content-Type' => 'application/json'])
            // ->get('http://localhost:8000/api/01');
        
        // $response = Http::timeout(180)->get('http://localhost:8000/api/01');
        $uri = 'http://localhost:8000/api/01';
        // $response = Http::withOptions([
        //       'debug' => false,
        //       'timeout' => 120,
        //       'headers'=>[
        //           'Accept' => 'application/json',
        //           'Content-Type' => 'application/json'
        //         ]
        //     ])->get($uri);
        // $response = Http::timeout(180)->get($uri);
        // $response = Http::get($uri);

        // $data = $response->json();

        // hardcode to try and get to passing data to partial!
        $data = [
            ["Full-time (FT)", 2, 110, 2, 114, '98%'],
            ["Part-time (PT)", 0, 2, 0, 0, '12%'],
            ["Total", 0, 0, 0, 0, '100%']
          ];

        // return $data;

        // ddd($data);
        // return view('welcome');
        return view('welcome', compact('data'));

        // return 'hello world';
    }
}
