<div class="item-container mt-5">
  <h1 class="text-xl font-bold">04 - FTFT F1 by Religion</h1>

  <h3>Headcounts</h3>

  <div class="hbc-container">
    <horizontal-bar-chart-component :labels="['Catholic', 'Other', 'Unknown']"
                                    :values="[22, 31, 108]">
    </horizontal-bar-component>
  </div>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

  <h3>Headcounts %</h3>

  <div class="pc-container">
    <pie-chart-component :labels="['Catholic', 'Other', 'Unknown']"
                         :values="[13.7, 19.3, 67.1]">
    </pie-chart-component>
  </div>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  {{-- TODO - Add rounding error note --}}

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

</div>
