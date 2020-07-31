<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fall 2020 Freshman Profile</title>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}
        <link rel="stylesheet" href="\css\app.css">
    </head>
    <body>
      <!-- TODO - Fix how to set the chart size????!!!! -->
      <!-- ref = https://stackoverflow.com/questions/37621020/setting-width-and-height -->
      <!-- style="position: relative; width:600vw; height:400vh;" -->

      <div id="app">
        <h1 class="text-xl text-gray-900">1 - F1 Headcounts by FT/PT Status and Entry-types</h1>

        <div class="item-1-container ml-10">
          <table class="table-auto">
            <thead>
              <tr>
                <th class="px-4 py-2"></th>
                <th class="px-4 py-2">Continuing</th>
                <th class="px-4 py-2">First-time</th>
                <th class="px-4 py-2">Transfer</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">FT/PT Percent</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border px-4 py-2">Full-time</td>
                <td class="border px-4 py-2">8</td>
                <td class="border px-4 py-2">156</td>
                <td class="border px-4 py-2">6</td>
                <td class="border px-4 py-2">{{ 8 + 156 + 6 }}</td>
                <td class="border px-4 py-2">{{ round(100*170/172, 1) }}%</td>
              </tr>
              <tr class="bg-gray-200">
                <td class="border px-4 py-2">Part-time</td>
                <td class="border px-4 py-2">0</td>
                <td class="border px-4 py-2">2</td>
                <td class="border px-4 py-2">0</td>
                <td class="border px-4 py-2">{{ 0 + 2 + 0 }}</td>
                <td class="border px-4 py-2">{{ round(100*2/172, 1) }}%</td>
              </tr>
              <tr>
                <td class="border px-4 py-2">Total</td>
                <td class="border px-4 py-2">8</td>
                <td class="border px-4 py-2">158</td>
                <td class="border px-4 py-2">6</td>
                <td class="border px-4 py-2">{{ 8 + 158 + 6 }}</td>
                <td class="border px-4 py-2">100.0%</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>Note: FTFT F1 = First-time, Full-time F1 students</td>
              </tr>
            </tfoot>
          </table>
      </div>

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

  <h1>3 - FTFT F1 by Ethnicity</h1>
  <h3>Headcounts</h3>

  <div class="container">
    <horizontal-bar-chart-component :labels="['Black or African American', 'Hispanics of any race', 'White', 'Other']"
                                    :values="[15, 26, 8, 107]">
    </horizontal-bar-component>
  </div>

  <h3>Headcounts %</h3>
  <div class="container">
    <pie-chart-component :labels="['Black or African American', 'Hispanics of any race', 'White', 'Other']"
                         :values="[9.6, 16.7, 5.1, 68.6]">
    </pie-chart-component>
  </div>

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
