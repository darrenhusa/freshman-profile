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

        /* Calculations */
        // $ft_continuing = $data[0][1];
        // $ft_first_time = $data[0][2];
        // $ft_transfer = $data[0][3];

        // $pt_continuing = $data[1][1];
        // $pt_first_time = $data[1][2];
        // $pt_transfer = $data[1][3];

        // $ft_total = array_sum(array_slice($data[0], 1, 3));
        // $pt_total = array_sum(array_slice($data[1], 1, 3));
        // $row_totals = [array_sum([$ft_continuing, $pt_continuing]), 
        //                 array_sum([$ft_first_time, $pt_first_time]), 
        //                 array_sum([$ft_transfer, $pt_transfer]),
        //                 array_sum([$ft_total, $pt_total])];

        // $ft_percent = round(100.0*$ft_total/$row_totals[3], 1);
        // $pt_percent = round(100.0*$pt_total/$row_totals[3], 1);

        // $data = [
        //     ["Full-time (FT)", $ft_continuing, $ft_first_time, $ft_transfer, $ft_total, strval($ft_percent).'%'],
        //     ["Part-time (PT)", $pt_continuing, $pt_first_time, $pt_transfer, $pt_total, strval($pt_percent).'%'],
        //     ["Total", $row_totals[0], $row_totals[1], $row_totals[2], $row_totals[3], '100%']
        // ];

        // return $data;

        // ddd($data);
        // return view('welcome');
        return view('welcome', compact('data'));

        // return 'hello world';
    }
}
