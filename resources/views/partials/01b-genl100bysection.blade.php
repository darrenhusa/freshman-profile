@php
  $data = [
    ["A", 20],
    ["B", 24],
    ["C", 23],
    ["D", 20],
    ["E", 23],
    ["F", 15],
    ["T1", 20],
    ["T2", 20],
    ["Grand Total", 165]
  ];

  $length = count($data);

@endphp

<div class="item-container mt-8">
  <h1 class="text-2xl font-bold">01 - B - GENL 100 Headcounts by Section</h1>

  <div class="table-container mt-5">
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2">Section</th>
          <th class="px-4 py-2">Total</th>
        </tr>
      </thead>
      <tbody class="text-right">
      @for ($i = 0; $i < $length; $i++)
          @if($i % 2 == 0)
            <!-- found an even row -->
            <tr>
          @else
            <!-- found an odd row -->
            <tr class="bg-gray-200">
          @endif
            <td class="border px-4 py-2 text-left">{{ $data[$i][0] }}</td>
            <td class="border px-4 py-2">{{ $data[$i][1] }}</td>
          </tr>
        @endfor  
        
      </tbody>
    </table>

    <!-- <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>F1 = Freshman (First-semester) students</h4>
    </div> -->

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR)</h4>
    </div>
{{--
    <div class="caveat mt-5">
      <h4 class="italic text-red-500"><span class="underline">Data Anomalies/Irregularities</span>:</h4>
      <p>There are some data anomalies/discrepancies between Slate CRM records and Empower SR records which account for the difference between the FTFT F1 totals.</p>
    </div> --}}
  </div>
</div>
