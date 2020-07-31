<div class="item-container ml-5 mt-5">
  <h1 class="text-xl font-bold">04 - FTFT F1 by Religion</h1>

  <h3>Headcounts</h3>

  <div class="hbc-container">
    <horizontal-bar-chart-component :labels="['Catholic', 'Other']"
                                    :values="[71, 53]">
    </horizontal-bar-component>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

  <h3>Headcounts %</h3>
  <div class="pc-container">
    <pie-chart-component :labels="['Catholic', 'Other']"
                         :values="[52, 48]">
    </pie-chart-component>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

</div>
