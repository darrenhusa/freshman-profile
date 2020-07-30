<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fall 2020 Freshman Profile</title>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}
    </head>
    <body>
      <!-- TODO - Fix how to set the chart size????!!!! -->
      <!-- ref = https://stackoverflow.com/questions/37621020/setting-width-and-height -->
      <!-- style="position: relative; width:600vw; height:400vh;" -->

      <div id="app">
        <h1>1 - F1 Headcounts by FT/PT Status and Entry-types</h1>

        <h1>2 - FTFT F1 by Gender</h1>
        <h3>Headcounts</h3>

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

        <h1>TEST PIE CHART</h1>
        <h3>Headcounts %</h3>
        <div class="container">
          <pie-chart-component :labels="['Female', 'Male']"
                               :values="[75, 25]">
          </pie-chart-component>
        </div>

  <h1>3 - FTFT F1 by Ethnicity</h1>

  {{-- <h1>4 - FTFT F1 by Religion</h1> --}}

  {{-- <h1>5 - FTFT F1 by Athletic Status</h1> --}}

  {{-- <h1>6 - FTFT F1 by Zero EFC Status</h1> --}}

  {{-- <h1>7 - FTFT F1 by Zero EFC Status</h1> --}}

  {{-- <h1>8</h1>
  <p>FTFT F1 by State of Primary Residence</p>
  <p>FTFT F1 Indiana Residents by County</p>
  <p>FTFT F1 Lake County Residents by City</p>

  <h1>9</h1>
  <p>Top Recruiting Sources for FTFT F1 Students</p> --}}

      </div>

      <script src="/js/app.js"></script>
    </body>
</html>
