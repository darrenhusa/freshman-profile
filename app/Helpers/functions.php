<?php

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
