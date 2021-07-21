@php
  $data = [
    ["Indiana", 49, '63.6%'],
    ["Illinois", 22, '28.6%'],
    ["Out-of-State", 6, '7.8%'],
    ["Total", 77, '100.0%'],
  ];

@endphp

<div class="item-container mt-5">

  <h2 class="text-2xl font-bold">08<span class="block">A) FTFT F1 by State of Primary Residence</span></h2>
  
  <div class="table-container ml-10">
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2">Number (N)</th>
          <th class="px-4 py-2">Percentage (%)</th>
        </tr>
      </thead>
      <tbody class="text-right">
      @for ($i = 0; $i < 4; $i++)
          @if($i % 2 == 0)
            <!-- found an even row -->
            <tr>
          @else
            <!-- found an odd row -->
            <tr class="bg-gray-200">
          @endif
            <td class="border px-4 py-2 text-left">{{ $data[$i][0] }}</td>
            <td class="border px-4 py-2">{{ $data[$i][1] }}</td>
            <td class="border px-4 py-2">{{ $data[$i][2] }}</td>
          </tr>
        @endfor  
       
      </tbody>
    </table>

    <div class="note mt-5 italic">
      <h4><span class="underline mr-1">Notes:</span></h4>
      <ul>
        <li>FTFT F1 = First-time, Full-time F1 students</li>
        <li>There may be some rounding error with the percentages.</li>
      </ul>
    </div>

    <div class="source mt-3">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list. Slate CRM for residency information.</h4>
    </div>
  </div>
</div>
