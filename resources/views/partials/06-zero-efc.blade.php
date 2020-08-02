<div class="item-container mt-5">
  <h1 class="text-xl font-bold">06 - FTFT F1 by Zero EFC Status</h1>

  <h3>Headcounts</h3>

  <div class="hbc-container">
    <horizontal-bar-chart-component :labels="['Zero EFC', 'Not Zero EFC']"
                                    :values="[72, 84]">
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
    <pie-chart-component :labels="['Zero EFC', 'Not Zero EFC']"
                         :values="[46, 54]">
    </pie-chart-component>
  </div>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

</div>
