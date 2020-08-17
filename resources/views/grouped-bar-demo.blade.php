<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chart Demos</title>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}
        <link rel="stylesheet" href="\css\app.css">
    </head>
    <body class="ml-20">
      <!-- TODO - Fix how to set the chart size????!!!! -->
      <!-- ref = https://stackoverflow.com/questions/37621020/setting-width-and-height -->
      <!-- style="position: relative; width:600vw; height:400vh;" -->

      <div id="app">

        <h1 class="mt-5 text-2xl font-bold">Fall 2020 xxxxxxxxxxxxx</h1>
        <h3 class="italic">(as of August xx, 2020 at xx:xx PM)</h3>

        {{-- <h1 class="text-xl font-bold">02 - FTFT F1 by Gender</h1> --}}

        {{-- <h3>Headcounts</h3> --}}

        <div class="gbc-container">
          <grouped-bar-chart-component labels="['1900', '1950', '1999', '2050']"
                                       dataset1="[label: 'Africa', backgroundColor: 'blue', data: [133, 221, 783, 2478]]"
                                       dataset2="[label: 'Europe', backgroundColor: 'red', data: [408, 547, 675, 734]]">
          </grouped-bar-component>
        </div>

        {{-- <div class="note mt-5">
          <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
        </div> --}}

        <div class="source mt-5">
          <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
        </div>

      </div>

      <script src="/js/app.js"></script>
    </body>
</html>
