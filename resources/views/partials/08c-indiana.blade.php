@php
  $myData = [
    ["Lake", 77],
    ["Porter", 5],
    ["La Porte", 3],
    ["Marion", 3],
    ["All Other", 7],
  ];
  
@endphp

<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold"><span>C) Top Indiana Resident Counties for FTFT F1</span></h2>
  <h3>showing counties with <span class="underline uppercase">3 or more</span> residents only</h3>

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