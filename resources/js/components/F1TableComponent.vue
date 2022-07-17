<script>
    export default {
        props: ['url'],
        
        data() {
            return {
                data: [],
            }
        },

        created() {
            console.log('Component mounted.')

            // axios.get('/gender-data').then(response => console.log(response.data));
            fetch('http://localhost:8000/api/01')
                .then(response => response.json())
                .then(data => {
                    console.log(data)
            });
        }
    }
</script>

<template>       
    <div class="table-container mt-5">
    foobar
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2">Continuing</th>
          <th class="px-4 py-2">First-time</th>
          <th class="px-4 py-2">Transfer</th>
          <th class="px-4 py-2">Total</th>
          <th class="px-4 py-2">FT/PT Percent</th>
        </tr>
      </thead>
      <tbody class="text-right">
      @for ($i = 0; $i < count($data); $i++)
          @if($i % 2 == 0)
            <!-- found an even row -->
            <tr>
          @else
            <!-- found an odd row -->
            <tr class="bg-gray-200">
          @endif
            @for ($j = 0; $j < count($data[0]); $j++)
              @if($j == 0)
              <!-- found the first column -->
              <td class="border px-4 py-2 text-left">{{ $data[$i][$j] }}</td>
              @else
              <!-- found all other columns -->
              <td class="border px-4 py-2">{{ $data[$i][$j] }}</td>              
              @endif
      
            @endfor  
          </tr>
        @endfor  
        
      </tbody>
    </table>
</div>
</template>
