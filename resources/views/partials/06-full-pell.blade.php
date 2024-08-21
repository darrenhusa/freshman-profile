@php
  /* $by_zero_efc_status = "[55, 54]";
  $sai_categories = "['Full Pell', 'Not Full Pell']";
  */
@endphp

<div class="item-container mt-12">
    <h2 class="text-2xl font-bold">06 - FTFT F1 by Full Pell Status</h2>

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
    <h4 class="italic"><span class="underline mr-1">Notes:</span>where Full Pell is defined as Student Aid Index (SAI) such that -$1,500 <= SAI in 2024-25 Award Year <= $0</h4>
    <h4 class="italic">FTFT F1 = First-time, Full-time F1 students</h4>
    <!-- <h4 class="italic block indent-5">FTFT F1 = First-time, Full-time F1 students</h4> -->
  </div>

  <div class="source mt-2">
    <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Financial Aid Records (FA)</h4>
  </div>

</div>

<p class="item-end"></p>