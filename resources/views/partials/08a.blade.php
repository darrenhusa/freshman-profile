@php
  $myData = [
        ["Indiana", 82],
        ["Illinois", 17],
        ["Out-of-State", 17]
    ];

@endphp

<div class="item-container mt-5">

  <h2 class="text-2xl font-bold">08<span class="block">A) FTFT F1 by State of Primary Residence</span></h2>
  
    <x-table-component :myData="$myData" />

    <div class="note mt-5 italic">
      <h4><span class="underline mr-1">Notes:</span></h4>
      <ul>
        <li>FTFT F1 = First-time, Full-time F1 students</li>
        <li>There may be some rounding error with the percentages.</li>
      </ul>
    </div>

    <div class="source mt-3">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list and residency information.</h4>
    </div>
  </div>
</div>

<p class="item-end"></p>