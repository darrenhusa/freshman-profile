<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fall 2020 Freshman Profile</title>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}
        <link rel="stylesheet" href="\css\app.css">
    </head>
    <body class="ml-20">
      <!-- TODO - Fix how to set the chart size????!!!! -->
      <!-- ref = https://stackoverflow.com/questions/37621020/setting-width-and-height -->
      <!-- style="position: relative; width:600vw; height:400vh;" -->

      <div id="app">

        <h1 class="mt-5 text-2xl font-bold">Fall 2020 CCSJ Freshman Profile</h1>
        <h3 class="italic">(as of August 3, 2020 at 3:00 PM)</h3>
        @include('partials.01-f1-table')
        @include('partials.02-gender')
        @include('partials.03-ethnicity')
        {{-- TODO Need actual religion data??!!!! --}}
        @include('partials.04-religion')
        @include('partials.05-athletic-status')
        @include('partials.06-zero-efc')
        @include('partials.07-high-school-gpa')
        {{-- 08 = FTFT F1 by primary-residence --}}
        @include('partials.08a')
        @include('partials.08b')
        @include('partials.08c')

        {{-- TODO --}}
        @include('partials.09-top-recruiting-sources')

        @include('partials.10-top-majors')

        <div class="container ml-5 italic my-10">
          {{-- <p>TODO - ADD INTERNATIONAL STUDENTS CODE!!!</p> --}}

          {{-- <p>TODO - EXPERIMENT WITH IMAGE DIMENSIONS!!!</p> --}}
          {{-- <p>TODO - EXPERIMENT WITH CHART LABEL FORMATTING - BOLD, CHANGE COLOR</p> --}}
        </div>

      </div>

      <script src="/js/app.js"></script>
    </body>
</html>
