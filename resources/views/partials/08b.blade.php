<div class="item-container ml-5 mt-5">

  {{-- <h1 class="text-xl font-bold">08</h1> --}}
  <h2>FTFT F1 Indiana Residents by County</h2>
  <div class="table-container ml-10">
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2">Number (N)</th>
          <th class="px-4 py-2">Percentage (%)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border px-4 py-2">Lake</td>
          <td class="border px-4 py-2">84</td>
          <td class="border px-4 py-2">{{ round(100*84/97, 0) }}%</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2">Porter</td>
          <td class="border px-4 py-2">6</td>
          <td class="border px-4 py-2">{{ round(100*6/97, 0) }}%</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Other</td>
          <td class="border px-4 py-2">7</td>
          <td class="border px-4 py-2">{{ round(100*7/97, 0) }}%</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2">Total</td>
          <td class="border px-4 py-2">{{ 84 + 6 + 7 }}</td>
          <td class="border px-4 py-2">100%</td>
        </tr>
      </tbody>
    </table>
    <div class="note">
      <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-5">
      <h4 class="italic"><span class="underline">Source</span>: Slate CRM</h4>
    </div>

  </div>
</div>
