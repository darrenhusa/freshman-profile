@php
  $data = [
    ["Whiting High School", 6, '8.6%', 1],
    ["Dwight D Eisenhower High School (Blue Island, IL)", 6, '8.6%', 1],
    ["Morton Senior High School", 5, '7.1%', 3],
    ["George Rogers Clark Middle/High School (Hammond)", 5, '7.1%', 3],
    ["Hanover Central High School (Cedar Lake)", 4, '5.7%', 5],
    ["D E Gavit Junior-Senior High School (Hammond)", 3, '4.3%', 6],
    ["Highland High School", 3, '4.3%', 6],
    ["All Remaining High Schools", 38, '54.3%', '--'],
    ["Grand Total", 70, '100.0%', '--'],
  ];

@endphp

<div class="item-container ml-5 mt-5">

  <h2 class="text-2xl font-bold">09</h2>
  <h3 class="text-2xl font-bold">Top Recruiting Sources for FTFT F1 Students</h3>
  
  <h3>only showing high schools where the enrolled students >= 3</h3>

  <div class="table-container ml-10">

    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2">Number (N)</th>
          <th class="px-4 py-2">Percentage (%)</th>
          <th class="px-4 py-2">Current Rank</th>
        </tr>
      </thead>
      <tbody class="text-right">
      @for ($i = 0; $i < 9; $i++)
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
            <td class="border px-4 py-2">{{ $data[$i][3] }}</td>
          </tr>
        @endfor  
        
      </tbody>
    </table>

    <div class="note mt-5">
      <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
    </div>

    <div class="source mt-2">
      <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list. Slate CRM for high school information.</h4>
    </div>

  </div>
</div>
