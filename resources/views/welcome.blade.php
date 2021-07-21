<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fall 2021 Freshman Profile</title>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/print.css">
    </head>
    <body class="ml-20">
      <!-- Note - How to set the chart size -->
      <!-- ref = https://stackoverflow.com/questions/37621020/setting-width-and-height -->
      <!-- style="position: relative; width:600vw; height:400vh;" -->

      <div id="app">

        <h1 class="mt-5 text-2xl font-bold">Fall 2021 CCSJ Freshman Profile</h1>
        <h3 class="italic">(as of July 21, 2021 at 8:00 AM)</h3>
        @include('partials.01-f1-table')
        @include('partials.02-gender')
        @include('partials.03-ethnicity')
        @include('partials.04-religion')
        @include('partials.05-athletic-status')
        @include('partials.06-zero-efc')
        
        <!-- SLATE CRM -->
        <!-- <div style="display: none"> -->
        @include('partials.07-high-school-gpa')
        <!-- </div> -->

        <!-- SLATE CRM -->
        <!-- 08 = FTFT F1 by primary-residence -->
        <!-- <div style="display: none"> -->
        @include('partials.08a')
        @include('partials.08b')
        @include('partials.08c')
        <!-- </div> -->

        <!-- SLATE CRM -->
        <div style="display: none">
          @include('partials.09-top-recruiting-sources')
        </div>

        @include('partials.10-top-majors')
        
        <!-- @include('partials.technology') -->

        <div class="container ml-5 italic my-10">
          {{-- <p>TODO - ADD INTERNATIONAL STUDENTS CODE!!!</p> --}}
        </div>

      </div>

      <script src="/js/app.js"></script>
    </body>
</html>
