<div class="item-container mt-5">
  <h1 class="text-xl font-bold">07 - FTFT F1 by High School GPA</h1>

  <h3>Headcounts</h3>

  <div class="hbc-container">
    <horizontal-bar-chart-component :labels="['1.0 to 2.0', '2.01 to 3.0', '3.01 and above']"
                                    :values="[28, 68, 35]">
    </horizontal-bar-component>
  </div>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Slate CRM</h4>
  </div>

  <h3>Headcounts %</h3>
  <div class="pc-container">
    <pie-chart-component :labels="['1.0 to 2.0', '2.01 to 3.0', '3.01 and above']"
                         :values="[21, 52, 27]">
    </pie-chart-component>
  </div>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Slate CRM</h4>
  </div>

  <p class="text-red-500 font-bold">TODO - ADD THE TOTAL COUNT WITH HS GPA!</p>
  <p class="text-red-500 font-bold">TODO - ADD THE AVERAGE HS GPA!</p>

</div>
