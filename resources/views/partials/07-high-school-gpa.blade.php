@php
  $by_hs_gpa = "[16, 41, 30]";
  $gpa_ranges = "['1.0 to 2.0', '2.01 to 3.0', '3.01 and above']";

  $total_with_hs_gpa = 87;
  $average_hs_gpa = 2.71

@endphp

<div class="item-container mt-12">
    <h2 class="text-2xl font-bold">07 - FTFT F1 by High School GPA</h2>

    <div class="grid grid-cols-2 gap-4 place-items-start">
      <div class="hbc-container max-w-5xl">
        <h3 class="my-5 text-lg font-semibold">Headcounts</h3>

        <horizontal-bar-chart-component :labels="{{ $gpa_ranges }}"
                                        :values="{{ $by_hs_gpa }}"
                                        width="600"
                                        height="350"
        >
        </horizontal-bar-component>
      </div>

      <div class="pc-container">
        <h3 class="my-5 text-lg font-semibold">Headcounts %</h3>
          <pie-chart-component :labels="['1.0 to 2.0', '2.01 to 3.0', '3.01 and above']"
                               :values="{{ $by_hs_gpa }}"
                               width="350"
                               height="350"
          >
          </pie-chart-component>
      </div>
  </div>

  <h3 class="mt-5 text-lg font-semibold">Total with verified high school GPA = {{ $total_with_hs_gpa }}</h3>
  <h3 class="mb-5 text-lg font-semibold">Average high school GPA = {{ $average_hs_gpa }}</h3>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline mr-1">Note:</span>FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  <div class="source mt-2">
    <h4 class="italic"><span class="underline mr-1">Source:</span>Empower Student Records (SR) for student list. Slate CRM for HS GPA data.</h4>
  </div>

</div>

<div>
  <!-- <h3>Slate Query Definitions</h3>
  <ul>
    <li>The FTFT F1 data set is defined in Slate as:</li>
    <li>PersonEntryType = 'High School' for first-time and</li>
    <li>PersonStudentTime = 'FT' for full-time and</li>
    <li>PersonClassDivision = 'F1' for Freshman (first-semester)</li>
    <li>Using Rank 1 High School (SchoolsTypeLevelofStudy = 'High School' and SchoolsRankByLevelofStudy = '1')</li>
    <li>HS GPA = Slate SchoolsGPAVerified field</li>
  </ul> -->


  <!-- <div class="note mt-5 italic">
    <h4><span class="underline">Notes</span>:</h4>
    <ul>
      <li>FTFT F1 = First-time, Full-time F1 students</li>
      <li>There may be some rounding error with the percentages.</li>
    </ul>
  </div> -->


</div>
