<div class="item-container mt-8">
    <h1 class="text-xl font-bold">02 - FTFT F1 by Gender</h1>

    <div class="grid grid-cols-2 place-items-start">
      <div class="hbc-container max-w-5xl">
        <h3 class="my-5 text-lg font-semibold">Headcounts</h3>

        <horizontal-bar-chart-component :labels="['Female', 'Male', 'Unknown']"
                                        :values="[72, 69, 20]">
        </horizontal-bar-component>
      </div>

      <div class="pc-container">
        <h3 class="my-5 text-lg font-semibold">Headcounts %</h3>
          <pie-chart-component :labels="['Female', 'Male', 'Unknown']"
                          :values="[44.7, 42.9, 12.4]">
          </pie-chart-component>
      </div>
  </div>
   
  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Empower Student Records (SR)</h4>
  </div>

</div>
