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
        // // $response = Http::timeout(180)->get($uri);
        // $response = Http::get($uri);

        // $data = $response->json();

        // hardcode to try and get to passing data to partial!
        $result = (new F1TableController)->get_01_data();
        // ddd($result);
        $data = $result->getData()->data;
        // ddd($data);
        // ddd($data[0][0]);

          /* ENTER input data here!*/
        // $data = [
        //     ["Full-time (FT)", 2, 105, 2, 0, 0],
        //     ["Part-time (PT)", 0, 2, 0, 0, 0],
        //     ["Total", 0, 0, 0, 0, 0]
        // ];

        // return view('welcome');
        return view('welcome', compact('data'));

        // return 'hello world';
    }
}
