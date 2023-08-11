@php
  $religions = [
    ["Baptist", 5],
    ["Christian", 22],
    ["Lutheran", 5],
    ["Roman Catholic", 18],
    ["Other", 4],
    ["None", 10],
    ["Unknown Religion", 78]
  ];
  
@endphp

<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold"><span>04 - FTFT F1 by Religion</span></h2>
 
    <x-table-component :myData="$religions" />

    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR)</h4>
    </div>

  </div>

<p class="item-end"></p>