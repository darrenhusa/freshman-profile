@php
  
  $data = [
    ["Eisenhower High School (Blue Island, IL)", 7],
    ["Whiting High School", 6],
    ["Clark Middle/High School (Hammond)", 5],
    ["Morton Senior High School (Hammond)", 5],
    ["Hanover Central High School (Cedar Lake)", 4],
    ["Gavit Junior-Senior High School (Hammond)", 3],
    ["Griffith High School", 3],
    ["Highland High School", 3],
    ["Joliet Township High School West (IL)", 3],
    ["Marion Catholic High School (Chicago Heights, IL)", 3],
  ];

  foreach ($data as $val)
   {
       $school_names[] = $val[0];
       $numbers[] = $val[1];
   }
  $grand_total = 85;

  $ranks = calculate_rank($numbers);
  $sum = calculate_sum($numbers);
  $percentages = calculate_percentages($numbers, $grand_total, 1);
  $remaining_schools_total = $grand_total - $sum;
  $temp = (100.0 * $remaining_schools_total)/$grand_total;
  $remaining_schools_percentage = round($temp, 1);

  $length = count($data);

@endphp

<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold">09</h2>
  <h3 class="text-2xl font-bold">Top Recruiting Sources for FTFT F1 Students</h3>
  
  <h3>only showing high schools where the enrolled students >= 3</h3>

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
            <td class="border px-4 py-2 text-left">{{ $school_names[$i] }}</td>
            <td class="border px-4 py-2">{{ $numbers[$i] }}</td>
            <td class="border px-4 py-2">{{ $percentages[$i] }}</td>
            <td class="border px-4 py-2">{{ $ranks[$i] }}</td>
          </tr>
        @endfor  
        
        <tr class="font-semibold">
          <td class="border px-4 py-2 text-left">All Remaining High Schools</td>
          <td class="border px-4 py-2">{{ $remaining_schools_total }}</td>
          <td class="border px-4 py-2">{{ $remaining_schools_percentage }}</td>
          <td class="border px-4 py-2">--</td>
        </tr>

        <tr class="font-semibold">
          <td class="border px-4 py-2 text-left">Grand Total</td>
          <td class="border px-4 py-2">{{ $grand_total }}</td>
          <td class="border px-4 py-2">100%</td>
          <td class="border px-4 py-2">--</td>
        </tr>

      </tbody>
    </table>

    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list. Slate CRM for high school information.</h4>
    </div>

  </div>
</div>
