@php
  /* Only enter the first 10 majors - in descending order!*/               
  
  $data = [
    ['Business Management', 38], 
    ['Kinesiology', 20],
    ['Psychology', 18],
    ['General Studies', 17], 
    ['Criminal Justice', 13],
    ['Digital & Studio Arts', 12], 
    ['Elementary Education', 5],
    ['English & Media Communications', 5],
    ['Accounting', 4],    
    ['Health Science (Associates)', 4],
  ];

  /* extra majors - fill-in as needed
  ['Biomedical Science', 7],
    ['Elementary Education', 4],
    ['Medical Lab Science', 2], 
    ['Forensic Science', 2], */

  $grand_total = 144;

  foreach ($data as $val)
   {
       $majors[] = $val[0];
       $numbers[] = $val[1];
   }
  
  $ranks = calculate_rank($numbers);
  $sum_from_top_ten = calculate_sum($numbers);
  $percentage_from_top_ten = round(100.0*$sum_from_top_ten/$grand_total, 0);
  $percentages = calculate_percentages($numbers, $grand_total, 1);

  $length = count($data);

@endphp


<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold">10</h2>
  <h3 class="text-2xl font-bold">Top Ten Majors for FTFT F1 Students</h3>

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

        @for ($i = 0; $i < $length; $i++)
          @if($i % 2 == 0)
            <!-- found an even row -->
            <tr>
          @else
            <!-- found an odd row -->
            <tr class="bg-gray-200">
          @endif
            <td class="border px-4 py-2 text-left">{{ $majors[$i] }}</td>
            <td class="border px-4 py-2">{{ $numbers[$i] }}</td>
            <td class="border px-4 py-2">{{ $percentages[$i] }}%</td>
            <td class="border px-4 py-2">{{ $ranks[$i] }}</td>
          </tr>
        @endfor
        <tr class="font-semibold">
          <td class="border px-4 py-2">Total (from top 10)</td>
          <td class="border px-4 py-2">{{ $sum_from_top_ten }}</td>
          <td class="border px-4 py-2">{{ $percentage_from_top_ten }}%</td>
          <td class="border px-4 py-2">--</td>
        </tr>
        <tr class="font-semibold">
          <td class="border px-4 py-2">Grand Total (from all FTFT F1)</td>
          <td class="border px-4 py-2">{{ $grand_total }}</td>
          <td class="border px-4 py-2">100%</td>
          <td class="border px-4 py-2">--</td>
        </tr>
      </tbody>
    </table>
    <div class="note mt-1 text-xs">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-0 text-xs">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR)</h4>
    </div>

  </div>
</div>

<!-- <p class="item-end"></p> -->