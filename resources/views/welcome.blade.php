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
      <h3>Headcounts</h3>

      <!-- TODO - Fix how to set the chart size????!!!! -->
      <!-- ref = https://stackoverflow.com/questions/37621020/setting-width-and-height -->
      <!-- style="position: relative; width:600vw; height:400vh;" -->

      <div id="app">
        <div class="container">
          <horizontal-bar-chart-component :labels="['Female', 'Male']"
                                          :values="[71, 53]">
          </horizontal-bar-component>
        </div>

        <h3>Headcounts %</h3>
        <div class="container">
          <pie-chart-component :labels="['Female', 'Male']"
                               :values="[52, 48]">
          </pie-chart-component>
        </div>

        <h3>Headcounts %</h3>
        <div class="container">
          <pie-chart-component :labels="['Female', 'Male']"
                               :values="[75, 25]">
          </pie-chart-component>
        </div>

      </div>

      <script src="/js/app.js"></script>
    </body>
</html>
