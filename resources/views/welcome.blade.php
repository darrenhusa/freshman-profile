<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fall 2022 Freshman Profile</title>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/print.css">
    </head>
    <body class="ml-20">
      <!-- Note - How to set the chart size -->
      <!-- ref = https://stackoverflow.com/questions/37621020/setting-width-and-height -->
      <!-- style="position: relative; width:600vw; height:400vh;" -->

      <div id="app">
        
        <h1 class="mt-5 text-2xl font-bold">Fall 2022 CCSJ Freshman Profile</h1>
        <h3 class="italic">(as of July 14, 2022 at 9:00 AM)</h3>
        @include('partials.01-f1-table', ['data' => $data])

        @includeWhen(false, 'partials.01b-genl100bysection')
        @includeWhen(false, 'partials.01c-genl100crosstab')

        @include('partials.02-gender', ['labels' => json_encode($chart1_labels), 'values' => json_encode($chart1_values)])
        @include('partials.03-ethnicity', ['labels' => json_encode($chart2_labels), 'values' => json_encode($chart2_values)])
        @include('partials.04-religion', ['labels' => json_encode($chart3_labels), 'values' => json_encode($chart3_values)])
        @include('partials.05-athletic-status')
        @include('partials.06-zero-efc')
        
        <!-- SLATE CRM -->
        @include('partials.07-high-school-gpa')

        <!-- SLATE CRM -->
        <!-- 08 = FTFT F1 by primary-residence -->
        @include('partials.08a')
        @include('partials.08b-illinois')
        @include('partials.08c-indiana')
        @include('partials.08d')

        <!-- SLATE CRM -->
        @include('partials.09-top-recruiting-sources')

        @include('partials.10-top-majors')
        
        <!-- @include('partials.technology') -->

        <div class="container ml-5 italic my-10">
          {{-- <p>TODO - ADD INTERNATIONAL STUDENTS CODE!!!</p> --}}
        </div>

      </div>

      <script src="/js/app.js"></script>
    </body>
</html>
