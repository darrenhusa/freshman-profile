@php
  $by_zero_efc_status = "[58, 47]";
  $efc_categories = "['Zero EFC', 'Not Zero EFC']";
@endphp

<div class="item-container mt-12">
    <h2 class="text-2xl font-bold">06 - FTFT F1 by Zero EFC Status</h2>

    <div class="grid grid-cols-2 gap-4 place-items-start">
      <div class="hbc-container max-w-5xl">
        <h3 class="my-5 text-lg font-semibold">Headcounts</h3>

        <horizontal-bar-chart-component :labels="{{ $efc_categories }}"
                                        :values="{{ $by_zero_efc_status }}"
                                        width="600"
                                        height="350"
        >
        </horizontal-bar-component>
      </div>

      <div class="pc-container">
        <h3 class="my-5 text-lg font-semibold">Headcounts %</h3>
          <pie-chart-component :labels="['Zero EFC', 'Not Zero EFC']"
                               :values="{{ $by_zero_efc_status }}"
                               width="350"
                               height="350"
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
