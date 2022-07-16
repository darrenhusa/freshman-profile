@php

/* ENTER input data here!*/
/* $data = [
    ["Full-time (FT)", 2, 105, 2, 0, 0],
    ["Part-time (PT)", 0, 2, 0, 0, 0],
    ["Total", 0, 0, 0, 0, 0]
  ];
*/
/* Calculations */
/*  $ft_total = array_sum(array_slice($data[0], 1, 3));
  $pt_total = array_sum(array_slice($data[1], 1, 3));
  $row_totals = [array_sum([$data[0][1], $data[1][1]]), 
                 array_sum([$data[0][2], $data[1][2]]), 
                 array_sum([$data[0][3], $data[1][3]]),
                 array_sum([$ft_total, $pt_total])];

  $ft_percent = round(100.0*$ft_total/$row_totals[3], 1);
  $pt_percent = round(100.0*$pt_total/$row_totals[3], 1);

  $data = [
    ["Full-time (FT)", 2, 105, 2, $ft_total, strval($ft_percent).'%'],
    ["Part-time (PT)", 0, 2, 0, $pt_total, strval($pt_percent).'%'],
    ["Total", $row_totals[0], $row_totals[1], $row_totals[2], $row_totals[3], '100%']
  ];

  $length = count($data);
*/
@endphp

<div class="item-container mt-8">
  <h1 class="text-2xl font-bold">01 - F1 Headcounts by FT/PT Status and Entry-types</h1>
  <ajax-component></ajax-component>

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
      @for ($i = 0; $i < count($data); $i++)
          @if($i % 2 == 0)
            <!-- found an even row -->
            <tr>
          @else
            <!-- found an odd row -->
            <tr class="bg-gray-200">
          @endif
            @for ($j = 0; $j < count($data[0]); $j++)
              @if($j == 0)
              <!-- found the first column -->
              <td class="border px-4 py-2 text-left">{{ $data[$i][$j] }}</td>
              @else
              <!-- found all other columns -->
              <td class="border px-4 py-2">{{ $data[$i][$j] }}</td>              
              @endif
      
            @endfor  
          </tr>
        @endfor  
        
      </tbody>
    </table>

    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>F1 = Freshman (First-semester) students</h4>
    </div>

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

<p class="item-end"></p>
