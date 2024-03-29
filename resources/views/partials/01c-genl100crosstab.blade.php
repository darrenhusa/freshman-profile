@php
  $data = [
    ["Full-time (FT)", 14, 109, 33, 156, '94.5%'],
    ["Part-time (PT)", 1, 5, 3, 9, '5.5%'],
    ["Total", 15, 114, 36, 165, '100.0%']
  ];

  $length = count($data);

@endphp

<div class="item-container mt-8">
  <h1 class="text-2xl font-bold">01 - C - GENL 100 Headcounts by FT/PT Status and Entry-types</h1>

  <div class="table-container mt-5">
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
      @for ($i = 0; $i < $length; $i++)
          @if($i % 2 == 0)
            <!-- found an even row -->
            <tr>
          @else
            <!-- found an odd row -->
            <tr class="bg-gray-200">
          @endif
            <td class="border px-4 py-2 text-left">{{ $data[$i][0] }}</td>
            <td class="border px-4 py-2">{{ $data[$i][1] }}</td>
            <td class="border px-4 py-2">{{ $data[$i][2] }}</td>
            <td class="border px-4 py-2">{{ $data[$i][3] }}</td>
            <td class="border px-4 py-2">{{ $data[$i][4] }}</td>
            <td class="border px-4 py-2">{{ $data[$i][5] }}</td>
          </tr>
        @endfor  
        
      </tbody>
    </table>

    <!-- <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>F1 = Freshman (First-semester) students</h4>
    </div> -->

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR)</h4>
    </div>
{{--
    <div class="caveat mt-5">
      <h4 class="italic text-red-500"><span class="underline">Data Anomalies/Irregularities</span>:</h4>
      <p>There are some data anomalies/discrepancies between Slate CRM records and Empower SR records which account for the difference between the FTFT F1 totals.</p>
    </div> --}}
  </div>
</div>
