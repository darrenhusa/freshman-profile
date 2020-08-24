<div class="item-container mt-5">
  <h1 class="text-xl font-bold">03 - FTFT F1 by Ethnicity</h1>

  <h3>Headcounts</h3>

  <div class="hbc-container">
    <horizontal-bar-chart-component :labels="['Black or African American', 'Hispanics of any race', 'White', 'Other and Unknown']"
                                    :values="[13, 25, 7, 116]">
    </horizontal-bar-component>
  </div>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4><br />
    <h4 class="italic"><span class="underline">Note</span>: The horizontal bar chart Vue component as initially designed is limited to a <u>total of 4 datasets</u>, therefore as a result the last category combines the "Other and Unknown" groups in order to create a producable chart.</h4>
    <h4 class="italic"><span class="underline">Note</span>: The "Other and Unknown" category results disaggregated are: Other = 4 (2%) and Unknown = 116 (72%)</h4>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

  <h3>Headcounts %</h3>
  <div class="pc-container">
    <pie-chart-component :labels="['Black or African American', 'Hispanics of any race', 'White', 'Other and Unknown']"
                         :values="[8, 16, 4, 72]">
    </pie-chart-component>
  </div>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  {{-- TODO - Add note about rounding error --}}

  <!-- <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div> -->

</div>
