<div class="item-container mt-5">

  <h1 class="text-xl font-bold">08</h1>
  <h2>A) FTFT F1 by State of Primary Residence</h2>

  <h3>TODO - Add query definitions</h3>

  <div class="table-container ml-10">
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2">Number (N)</th>
          <th class="px-4 py-2">Percentage (%)</th>
        </tr>
      </thead>
      <tbody class="text-right">
        <tr>
          <td class="border px-4 py-2 text-left">Indiana</td>
          <td class="border px-4 py-2">94</td>
          <td class="border px-4 py-2">{{ round(100*94/159, 1) }}%</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">Illinois</td>
          <td class="border px-4 py-2">52</td>
          <td class="border px-4 py-2">{{ round(100*52/159, 1) }}%</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">Out-of-State</td>
          <td class="border px-4 py-2">13</td>
          <td class="border px-4 py-2">{{ round(100*13/159, 1) }}%</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">Total</td>
          <td class="border px-4 py-2">{{ 94 + 52 + 13 }}</td>
          {{-- <td class="border px-4 py-2"><span class="text-red-500 font-bold">{{ 94 + 52 + 13 }}</span></td> --}}
          <td class="border px-4 py-2">100%</td>
        </tr>
      </tbody>
    </table>

    <div class="note mt-5 italic">
      <h4><span class="underline">Notes</span>:</h4>
      <ul>
        <li>FTFT F1 = First-time, Full-time F1 students</li>
        <li>There may be some rounding error with the percentages.</li>
      </ul>
    </div>

    <div class="source mt-3">
      <h4 class="italic"><span class="underline">Source</span>: Slate CRM</h4>
    </div>

    {{-- <div class="caveat mt-5">
      <h4 class="italic text-red-500"><span class="underline">Data Anomalies/Irregularities</span>:</h4>
      <p>There are some data anomalies/discrepancies between Slate CRM records and Empower SR records which account for the difference between the FTFT F1 totals.</p>
    </div> --}}

  </div>
</div>
