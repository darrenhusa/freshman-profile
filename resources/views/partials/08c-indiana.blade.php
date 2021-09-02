@php
  $data = [
    ["Lake", 48],
    ["Marion", 6],
    ["LaPorte", 3],
    ["Porter", 3],
    ["All Other", 3],
  ];

  foreach ($data as $val)
   {
       $numbers[] = $val[1];
   }

    $grand_total = calculate_sum($numbers);
    $percentages = calculate_percentages($numbers, $grand_total, 1);

    $length = count($data);

@endphp

<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold"><span>C) Top Indiana Resident Counties for FTFT F1</span></h2>
  <h3>showing counties with 3 or more residents only</h3>
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
      @for ($i = 0; $i < $length; $i++)
          @if($i % 2 == 0)
            <!-- found an even row -->
            <tr>
          @else
            <!-- found an odd row -->
            <tr class="bg-gray-200">
          @endif
            <td class="border px-4 py-2 text-left">{{ $data[$i][0] }}</td>
            <td class="border px-4 py-2">{{ $numbers[$i] }}</td>
            <td class="border px-4 py-2">{{ $percentages[$i] }}</td>
          </tr>
        @endfor  

        <tr class="font-semibold">
          <td class="border px-4 py-2">Total</td>
          <td class="border px-4 py-2">{{ $grand_total }}</td>
          <td class="border px-4 py-2">100%</td>
        </tr>

      </tbody>
    </table>

    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list. Slate CRM for residency information.</h4>
    </div>

  </div>
</div>
