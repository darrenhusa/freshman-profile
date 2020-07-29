<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fall 2020 Freshman Profile</title>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}
    </head>
    <body>
      <h1>2 - FTFT F1 by Gender</h1>

      <div id="app">
        <pie-chart-component></pie-chart-component>
        {{-- <example-component></example-component> --}}
      </div>

      {{-- <canvas id="hbc"></canvas> --}}
      {{-- <canvas id="pc"></canvas>         --}}

      {{-- <canvas id="pc" width="1600" height="900"></canvas> --}}

      {{-- <canvas id="hbc" width="1600" height="900"></canvas> --}}
      {{-- <canvas id="pc" width="1600" height="900"></canvas> --}}

      {{-- <script src="/js/ccsj-sample-charts.js"></script> --}}
      <script src="/js/app.js"></script>
    </body>
</html>
