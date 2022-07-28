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
      @for ($i = 0; $i < $length; $i++)
          @if($i % 2 == 0)
            <!-- found an even row -->
            <tr>
          @else
            <!-- found an odd row -->
            <tr class="bg-gray-200">
          @endif
            <td class="border px-4 py-2 text-left">{{ $myData[$i][0] }}</td>
            <td class="border px-4 py-2">{{ $numbers[$i] }}</td>
            <td class="border px-4 py-2">{{ $percentages[$i] }}</td>
          </tr>
        @endfor  
       
        <tr class="font-semibold">
          <td class="border px-4 py-2">Total</td>
          <td class="border px-4 py-2">{{ $grandTotal }}</td>
          <td class="border px-4 py-2">100%</td>
        </tr>
      </tbody>
    </table>

    {{ $slot }}
  </div>
