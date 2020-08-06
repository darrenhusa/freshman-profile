<div class="item-container mt-5">
  <h1 class="text-xl font-bold">07 - FTFT F1 by High School GPA</h1>

  <h3>Slate Query Definitions</h3>
  <ul>
    <li>The FTFT F1 data set is defined in Slate as:</li>
    <li>PersonEntryType = 'High School' for first-time and</li>
    <li>PersonStudentTime = 'FT' for full-time and</li>
    <li>PersonClassDivision = 'F1' for Freshman (first-semester)</li>
    <li>Using Rank 1 High School (SchoolsTypeLevelofStudy = 'High School' and SchoolsRankByLevelofStudy = '1')</li>
    <li>HS GPA = Slate SchoolsGPAVerified field</li>
  </ul>

  <h3>Headcounts</h3>

  <div class="hbc-container">
    <horizontal-bar-chart-component :labels="['1.0 to 2.0', '2.01 to 3.0', '3.01 and above']"
                                    :values="[23, 59, 32]">
    </horizontal-bar-component>
  </div>

  <div class="note mt-5">
    <h4 class="italic"><span class="underline">Note</span>: FTFT F1 = First-time, Full-time F1 students</h4>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Slate CRM</h4>
  </div>

  <h3>Headcounts %</h3>
  <div class="pc-container">
    <pie-chart-component :labels="['1.0 to 2.0', '2.01 to 3.0', '3.01 and above']"
                         :values="[20.2, 51.8, 28.1]">
    </pie-chart-component>
  </div>

  <h3>Total with high school GPA = 114</h3>
  <h3>Average high school GPA = 2.64</h3>

  <div class="note mt-5 italic">
    <h4><span class="underline">Notes</span>:</h4>
    <ul>
      <li>FTFT F1 = First-time, Full-time F1 students</li>
      <li>There may be some rounding error with the percentages.</li>
    </ul>
  </div>

  <div class="source mt-5">
    <h4 class="italic"><span class="underline">Source</span>: Slate CRM</h4>
  </div>

</div>
