<div class="item-container ml-5 mt-5">

  <h1 class="text-xl font-bold">09</h1>
  <h2>Top Recruiting Sources for FTFT F1 Students</h2>

  <h3>only showing high schools where the enrolled students >= 5</h3>

  <h3>TODO - Add query definitions</h3>

  {{-- TODO - In the event of ties, the items are listed in alph order by school name!!! --}}

  <div class="table-container ml-10">

    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2">Number (N)</th>
          <th class="px-4 py-2">Percentage (%)</th>
          <th class="px-4 py-2">Current Rank</th>
        </tr>
      </thead>
      <tbody class="text-right">
        <tr>
          <td class="border px-4 py-2 text-left">George Washington High School</td>
          <td class="border px-4 py-2">8</td>
          <td class="border px-4 py-2">{{ round(100*8/119, 0) }}%</td>
          <td class="border px-4 py-2">1</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">Whiting High School</td>
          <td class="border px-4 py-2">7</td>
          <td class="border px-4 py-2">{{ round(100*7/119, 0) }}%</td>
          <td class="border px-4 py-2">2</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">Morton Senior High School</td>
          <td class="border px-4 py-2">6</td>
          <td class="border px-4 py-2">{{ round(100*6/119, 0) }}%</td>
          <td class="border px-4 py-2">3</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">Thornton Fractional North High School (IL)</td>
          <td class="border px-4 py-2">6</td>
          <td class="border px-4 py-2">{{ round(100*6/119, 0) }}%</td>
          <td class="border px-4 py-2">3</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">West Side High School</td>
          <td class="border px-4 py-2">5</td>
          <td class="border px-4 py-2">{{ round(100*5/119, 0) }}%</td>
          <td class="border px-4 py-2">5</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">All Remaining High Schools</td>
          <td class="border px-4 py-2">{{ (119-8-7-6-6-5) }}</td>
          <td class="border px-4 py-2">{{ round(100*((119-8-7-6-6-5))/119, 0) }}%</td>
          <td class="border px-4 py-2">--</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">Grand Total</td>
          <td class="border px-4 py-2">119</td>
          <td class="border px-4 py-2">100%</td>
          <td class="border px-4 py-2">--</td>
        </tr>
      </tbody>
    </table>

    <div class="note mt-5">
      <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-5">
      <h4 class="italic"><span class="underline">Source</span>: Slate CRM</h4>
    </div>

  </div>
</div>
