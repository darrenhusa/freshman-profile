@php
  $labels = "['Male', 'Femnale', 'Unknown']";
  $values = "[76, 34, 2]";

  /* "chart1": { 
    "Male": 76,
    "Female": 34,
    "Unknown": 2
  }
  */
  /* $labels = $chart1->keys(); 
    $values = $chart1->values();
    $labels = $chart1['keys'];
    $values = $chart1['values'];
    */

    /* $item_data_decode = json_decode($chart1, true);
    $array = array_combine(array_column($item_data_decode['meta_data'], 'key'), $item_data_decode['meta_data']);
    */

@endphp

<div class="item-container mt-12">
    <h2 class="text-2xl font-bold">02 - FTFT F1 by Gender</h2>

    <div class="grid grid-cols-2 gap-4 place-items-start">
      <div class="hbc-container max-w-5xl">
        <h3 class="my-5 text-lg font-semibold">Headcounts</h3>

        <horizontal-bar-chart-component :labels="{{ $labels }}"
                                        :values="{{ $values }}"
                                        width="475"
                                        height="350"
        >
        </horizontal-bar-component>
      </div>

      <div class="pc-container">
        <h3 class="my-5 text-lg font-semibold">Headcounts %</h3>
          <pie-chart-component :labels="{{ $labels }}"
                               :values="{{ $values }}"
                               width="325"
                               height="325"
          >
          </pie-chart-component>
      </div>
  </div>
   
  <div class="note mt-5">
    <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  <div class="source mt-2">
    <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR)</h4>
  </div>

</div>

<p class="item-end"></p>
