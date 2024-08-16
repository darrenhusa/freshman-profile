@php
  
  $data = [
    ["East Chicago Central High School", 10],
    ["Hammond Central High School", 10],
    ["Hammond Morton High School", 8],
    ["Andrean High School (Merrillville, IN)", 4],    
    ["Wheeler High School (Valparaiso, IN)", 4],
    ["Edison High School (Lake Station, IN)", 3],
    ["Grandview Prepatory High School (Boca Raton, FL)", 3],
    ["Michigan City High School", 3],
    ["Whiting High School", 3],    
    ];

  /* extra schools to fill in as needed! 
    ["Lighthouse College Preparatory Academy (Gary, IN)", 6],
    ["Griffith High School", 5],
    ["West Side High School (Gary, IN)", 5],
    ["Calumet High School (Gary, IN)", 4],
    ["Crown Point High School", 4],
    ["George Washington High School (Marion, IN)", 4],    
    ["Highland High School", 4],
    ["Cuba High School (Cuba, NM)", 3],
    ["Thea Bowman Leadership Academy (Gary, IN)", 3],

    ["Portage High School", 6],
    ["Joliet West High School West (IL)", 3],
    ["J.W. Sexton High School (Eaton, MI)", 3],    
   ["Clark Middle/High School (Hammond)", 5], 
    ["Hanover Central High School (Cedar Lake)", 4],
    ["Gavit Junior-Senior High School (Hammond)", 3],
    ["Marion Catholic High School (Chicago Heights, IL)", 3], */

  foreach ($data as $val)
   {
       $school_names[] = $val[0];
       $numbers[] = $val[1];
   }
  $grand_total = 115;

  $ranks = calculate_rank($numbers);
  $sum = calculate_sum($numbers);
  $percentages = calculate_percentages($numbers, $grand_total, 1);
  $remaining_schools_total = $grand_total - $sum;
  $temp = (100.0 * $remaining_schools_total)/$grand_total;
  $remaining_schools_percentage = round($temp, 1);

  $length = count($data);

@endphp

<div class="item-container ml-5 mt-5">

  <h2 class="text-lg font-bold">09 - Top Recruiting Sources for FTFT F1 Students</h2>
  <!-- <h3 class="text-lg font-bold">Top Recruiting Sources for FTFT F1 Students</h3> -->
  
  <h3 class="text-xs">only showing high schools where the enrolled students >= 3</h3>

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

    <!-- adjust margins for notes to force contents onto one page in PDF! -->
    <div class="note mt-1 text-xs">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-0 text-xs">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list. Slate CRM for high school information.</h4>
    </div>

  </div>
</div>

<p class="item-end"></p>