<div class="item-container mt-12">
    <h1 class="text-2xl font-bold">04 - FTFT F1 by Religion</h1>

    <div class="grid grid-cols-2 gap-4 place-items-start">
      <div class="hbc-container max-w-5xl">
        <h3 class="my-5 text-lg font-semibold">Headcounts</h3>

        <horizontal-bar-chart-component :labels="['Catholic', 'Other', 'Unknown']"
                                        :values="[23, 35, 11]"
                                        width="600"
                                        height="350"
        >
        </horizontal-bar-component>
      </div>

      <div class="pc-container">
        <h3 class="my-5 text-lg font-semibold">Headcounts %</h3>
          <pie-chart-component :labels="['Catholic', 'Other', 'Unknown']"
                               :values="[23, 35, 11]"
                               width="350"
                               height="350"
          >
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

{{-- TODO - Add rounding error note --}}
