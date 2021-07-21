@php
  $data = [
    ["Lake", 40, '81.6%'],
    ["Porter", 3, '6.1%'],
    ["Other", 6, '12.2%'],
    ["Total", 49, '100.0%'],
  ];

@endphp

<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold"><span>B) FTFT F1 Indiana Residents by County</span></h2>

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

    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list. Slate CRM for residency information.</h4>
    </div>

  </div>
</div>
