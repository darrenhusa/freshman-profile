@php
  $myData = [
    ["Lake", 62],
    ["Porter", 3],
    ["All Other", 11],
  ];
  
@endphp

<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold"><span>C) Top Indiana Resident Counties for FTFT F1</span></h2>
  <h3>showing counties with 3 or more residents only</h3>

  <x-table-component :myData="$myData" />

    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list. Slate CRM for residency information.</h4>
    </div>

  </div>
</div>

<p class="item-end"></p>