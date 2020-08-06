<div class="item-container ml-5 mt-5">

  {{-- <h1 class="text-xl font-bold">08</h1> --}}
  <h2>C) FTFT F1 Lake County Residents by City</h2>
  <h3>showing cities with 5 or more residents only</h3>

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
          <td class="border px-4 py-2 text-left">Hammond</td>
          <td class="border px-4 py-2">28</td>
          <td class="border px-4 py-2">{{ round(100*28/81, 1) }}%</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">Gary</td>
          <td class="border px-4 py-2">18</td>
          <td class="border px-4 py-2">{{ round(100*18/81, 1) }}%</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">Whiting</td>
          <td class="border px-4 py-2">9</td>
          <td class="border px-4 py-2">{{ round(100*9/81, 1) }}%</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">East Chicago</td>
          <td class="border px-4 py-2">7</td>
          <td class="border px-4 py-2">{{ round(100*7/81, 1) }}%</td>
        </tr>
        <tr>
          <td class="border px-4 py-2 text-left">All Other</td>
          <td class="border px-4 py-2">{{ 81-28-18-9-7 }}</td>
          <td class="border px-4 py-2">{{ round(100*(81-28-18-9-7)/81, 1) }}%</td>
        </tr>
        <tr class="bg-gray-200">
          <td class="border px-4 py-2 text-left">Total</td>
          <td class="border px-4 py-2">81</td>
          <td class="border px-4 py-2">100%</td>
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
