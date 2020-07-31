<div class="item-container ml-5 mt-5">
  <h1 class="text-xl font-bold">03 - FTFT F1 by Ethnicity</h1>

  <h3>Headcounts</h3>

  <div class="hbc-container">
    <horizontal-bar-chart-component :labels="['Black or African American', 'Hispanics of any race', 'White', 'Other']"
                                    :values="[15, 26, 8, 107]">
    </horizontal-bar-component>
  </div>

  <h3>Headcounts %</h3>
  <div class="pc-container">
    <pie-chart-component :labels="['Black or African American', 'Hispanics of any race', 'White', 'Other']"
                         :values="[9.6, 16.7, 5.1, 68.6]">
    </pie-chart-component>
  </div>

</div>
