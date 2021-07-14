<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold">09</h2>
  <h3 class="text-2xl font-bold">Top Recruiting Sources for FTFT F1 Students</h3>
  
  <h3>only showing high schools where the enrolled students >= 5</h3>

  <!-- <h3>Slate Query Definitions</h3>
  <ul>
    <li>The FTFT F1 data set is defined in Slate as:</li>
    <li>PersonEntryType = 'High School' for first-time and</li>
    <li>PersonStudentTime = 'FT' for full-time and</li>
    <li>PersonClassDivision = 'F1' for Freshman (first-semester)</li>
    <li>Using Rank 1 High School (SchoolsTypeLevelofStudy = 'High School' and SchoolsRankByLevelofStudy = '1')</li>
    <li>In the event of current rank ties, the items are listed in alphabetical order by school name.</li>
  </ul> -->

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
          <td class="border px-4 py-2">9</td>
          <td class="border px-4 py-2">{{ round(100*9/124, 0) }}%</td>
          <td class="border px-4 py-2">1</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">Whiting High School</td>
          <td class="border px-4 py-2">7</td>
          <td class="border px-4 py-2">{{ round(100*7/124, 0) }}%</td>
          <td class="border px-4 py-2">2</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">Morton Senior High School</td>
          <td class="border px-4 py-2">6</td>
          <td class="border px-4 py-2">{{ round(100*6/124, 0) }}%</td>
          <td class="border px-4 py-2">3</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">Thornton Fractional North High School (IL)</td>
          <td class="border px-4 py-2">6</td>
          <td class="border px-4 py-2">{{ round(100*6/124, 0) }}%</td>
          <td class="border px-4 py-2">3</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">West Side High School</td>
          <td class="border px-4 py-2">5</td>
          <td class="border px-4 py-2">{{ round(100*5/124, 0) }}%</td>
          <td class="border px-4 py-2">5</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">All Remaining High Schools</td>
          <td class="border px-4 py-2">{{ (124-9-7-6-6-5) }}</td>
          <td class="border px-4 py-2">{{ round(100*((124-9-7-6-6-5))/124, 0) }}%</td>
          <td class="border px-4 py-2">--</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">Grand Total</td>
          <td class="border px-4 py-2">124</td>
          <td class="border px-4 py-2">100%</td>
          <td class="border px-4 py-2">--</td>
        </tr>
      </tbody>
    </table>

    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Slate CRM</h4>
    </div>

  </div>
</div>
