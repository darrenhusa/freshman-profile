<div class="item-container mt-8">
  <h1 class="text-xl font-bold">02 - FTFT F1 by Gender</h1>

  <h3>Headcounts</h3>

  <div class="hbc-container">
    <horizontal-bar-chart-component :labels="['Female', 'Male', 'Unknown']"
                                    :values="[71, 53, 32]">
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
    <pie-chart-component :labels="['Female', 'Male', 'Unknown']"
                         :values="[52, 48, 32]">
    </pie-chart-component>
  </div>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  <div class="source mt-3">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

</div>
