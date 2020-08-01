<div class="item-container ml-10 mt-8">
  <h1 class="text-xl font-bold">01 - F1 Headcounts by FT/PT Status and Entry-types</h1>
  <div class="table-container ml-10 mt-5">
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
      <tbody class="text-right">
        <tr>
          <td class="border px-4 py-2 text-left">Full-time (FT)</td>
          <td class="border px-4 py-2">8</td>
          <td class="border px-4 py-2"><span class="text-red-500 font-bold">156</span></td>
          <td class="border px-4 py-2">6</td>
          <td class="border px-4 py-2">{{ 8 + 156 + 6 }}</td>
          <td class="border px-4 py-2">{{ round(100*170/172, 1) }}%</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">Part-time (PT)</td>
          <td class="border px-4 py-2">0</td>
          <td class="border px-4 py-2">2</td>
          <td class="border px-4 py-2">0</td>
          <td class="border px-4 py-2">{{ 0 + 2 + 0 }}</td>
          <td class="border px-4 py-2">{{ round(100*2/172, 1) }}%</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">Total</td>
          <td class="border px-4 py-2">8</td>
          <td class="border px-4 py-2">158</td>
          <td class="border px-4 py-2">6</td>
          <td class="border px-4 py-2">{{ 8 + 158 + 6 }}</td>
          <td class="border px-4 py-2">100.0%</td>
        </tr>
      </tbody>
    </table>

    <div class="note mt-5">
      <h4 class="italic"><span class="underline">Note</span>: F1 = Freshman (First-semester) students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
    </div>

    <div class="caveat mt-5">
      <h4 class="italic text-red-500"><span class="underline">Data Anomalies/Irregularities</span>:</h4>
      <p>There are some data anomalies/discrepancies between Slate CRM records and Empower SR records which account for the difference between the FTFT F1 totals.</p>
    </div>
  </div>
</div>
