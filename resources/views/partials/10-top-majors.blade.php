@php

  function calculate_sum($array) {
    $sum = 0;

    for ($i = 0; $i < count($array); ++$i)
    {
      $sum += $array[$i];
    }
    return $sum;
  }

  function calculate_percentages($array, $grand_total, $numberOfDecimalDigits) {
    
    $result = [];

    for ($i = 0; $i < count($array); ++$i)
    {
      $temp = round(100.0 * $array[$i] / $grand_total, $numberOfDecimalDigits);
      array_push($result, $temp);
    }
    return $result;
  }

  function calculate_rank($numbers) {

    rsort($numbers);

    $arrlength = count($numbers);
    $rank = 1;
    $prev_rank = $rank;
    $result = [];

    for($x = 0; $x < $arrlength; $x++) {
      if ($x == 0) {
          array_push($result, $rank);
      }elseif ($numbers[$x] != $numbers[$x-1]) {
          $rank++;
          $prev_rank = $rank;
          array_push($result, $rank);
      }else{
        $rank++;
        array_push($result, $prev_rank);
      }
    }
    return $result;
    /* return implode(', ', $result); */
  }

  $majors = array('General Studies', 'Business Management', 'Biomedical Science', 'Criminal Justice',
                  'Digital & Studio Arts', 'Kinesiology', 'Psychology', 'Accounting',
                  'Human Services', 'English & Media Communications');
  
  /* Only enter the first 10 majors - in descending order!*/               
  $numbers = array(19, 17, 7, 7, 7, 5, 5, 3, 3, 2);
  $grand_total = 78;

  $ranks = calculate_rank($numbers);
  $sum_from_top_ten = calculate_sum($numbers);
  $percentage_from_top_ten = round(100.0*$sum_from_top_ten/$grand_total, 0);
  $percentages = calculate_percentages($numbers, $grand_total, 1);
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

        @for ($i = 0; $i < 10; $i++)
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
    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR)</h4>
    </div>

  </div>
</div>
