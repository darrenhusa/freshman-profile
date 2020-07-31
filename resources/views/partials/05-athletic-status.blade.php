<div class="item-container ml-5 mt-5">
  <h1 class="text-xl font-bold">05 - FTFT F1 by Athletic-Status</h1>

  <h3>Headcounts</h3>

  <div class="hbc-container">
    <horizontal-bar-chart-component :labels="['Athlete', 'Non-Athlete']"
                                    :values="[54, 102]">
    </horizontal-bar-component>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

  <h3>Headcounts %</h3>
  <div class="pc-container">
    <pie-chart-component :labels="['Athlete', 'Non-Athlete']"
                         :values="[65, 35]">
    </pie-chart-component>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

</div>
