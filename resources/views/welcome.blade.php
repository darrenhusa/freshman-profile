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
        <div class="container">
          <horizontal-bar-chart-component :labels="['Female', 'Male']"
                                          :values="[71, 53]">
          </horizontal-bar-component>
        </div>

        <div class="container">
          <pie-chart-component :labels="['Female', 'Male']"
                               :values="[52, 48]">
          </pie-chart-component>
        </div>

        {{-- <example-component></example-component> --}}
      </div>

      <script src="/js/app.js"></script>
    </body>
</html>
