<template>
  <canvas id="pc" width="600" height="400"></canvas>
</template>

<script>
    import Chart from 'chart.js';

    export default {
        // mounted() {
        //     console.log('Pie Chart Component mounted.')
        // },

        mounted() {
          console.log('Inside mounted().')

          new Chart(document.getElementById("pc"), {
              type: 'pie',
              data: {
                labels: ["Female", "Male"],
                datasets: [{
                  label: "Headcounts in %",
                  backgroundColor: ["blue", "red"],
                  data: [52, 48]
                }]
              },
              options: {
                // responsive: true,
                // maintainAspectRatio: false,
                title: {
                  display: false,
                  text: 'TITLE'
                }
              }
            });
        }
    }
</script>
