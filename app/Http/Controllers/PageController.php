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

        $result = (new ChartDataController)->get_gender_data();
        // ddd($result);
        $chart1 = $result->getData()->chart1;
        // ddd($chart1);
        
        $chart1_labels = $this->extract_chart_labels($chart1);
        $chart1_values = $this->extract_chart_values($chart1);
        
        // ddd($chart1_labels, $chart1_values);

        $result = (new ChartDataController)->get_ethnicity_data();
        $chart2 = $result->getData()->chart2;
        
        $chart2_labels = $this->extract_chart_labels($chart2);
        $chart2_values = $this->extract_chart_values($chart2);
        
        $result = (new ChartDataController)->get_religion_data();
        $chart3 = $result->getData()->chart3;

        $chart3_labels = $this->extract_chart_labels($chart3);
        $chart3_values = $this->extract_chart_values($chart3);

        /* ENTER input data here!*/
        // $data = [
        //     ["Full-time (FT)", 2, 105, 2, 0, 0],
        //     ["Part-time (PT)", 0, 2, 0, 0, 0],
        //     ["Total", 0, 0, 0, 0, 0]
        // ];

        // return view('welcome');
        return view('welcome', [
            'data' => $data,
            'chart1_labels' => $chart1_labels,
            'chart1_values' => $chart1_values,
            'chart2_labels' => $chart2_labels,
            'chart2_values' => $chart2_values,
            'chart3_labels' => $chart3_labels,
            'chart3_values' => $chart3_values,
        ]);

        // return 'hello world';
    }

    private function extract_chart_labels($data)
    {
        $labels = [];
        
        foreach ($data as $key => $val)
        {
          array_push($labels, $key);
        }

        return $labels;
    }

    private function extract_chart_values($data)
    {
        $values = [];
        
        foreach ($data as $key => $val)
        {
          array_push($values, $val);
        }

        return $values;
    }
}
