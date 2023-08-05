@php
  $myData = [
    ["Gary", 26],
    ["Hammond", 16],
    ["East Chicago", 13],
    ["Cedar Lake", 3],
    ["Crown Point", 3],
    ["Griffith", 3],
    ["Highland", 3],
    ["All Other", 9],
  ];
  
@endphp

<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold"><span>D)Top Lake County Resident Cities for FTFT F1</span></h2>
  <h3>showing municipalities with <span class="underline uppercase">3 or more</span> residents only</h3>

    <x-table-component :myData="$myData" />

    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list and residency information.</h4>
    </div>

  </div>
</div>

<p class="item-end"></p>