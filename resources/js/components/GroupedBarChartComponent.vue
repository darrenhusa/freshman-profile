<template>
  <canvas ref="canvas"></canvas>
  <!-- <canvas ref="canvas" width="600" height="400"></canvas> -->
</template>

<script>
    import Chart from 'chart.js';

    export default {

        props: ['labels', 'values'],

        mounted() {
          // console.log('Inside mounted().')

          new Chart(this.$refs.canvas, {
            type: 'bar',
            data: {
              labels: this.labels,

            datasets: [
                {
                  label: "Africa",
                  backgroundColor: "blue",
                  data: this.values
                },
                {
                  label: "Europe",
                  backgroundColor: "red",
                  data: [408,547,675,734]
                }
              ]
            },
            options: {
              // scales: {
              //       xAxes: [{
              //           ticks: {
              //               min: 0 // Edit the value according to what you need
              //           }
              //       }],
              //       yAxes: [{
              //           stacked: true
              //       }]
              //   },
              responsive: true,
              maintainAspectRatio: false,
              // legend: { display: false },
              legend: { display: true },
              title: {
                display: true,
                // display: false,
                text: 'CHART TITLE TEXT'
              }
            }
          });
        }
      }
</script>
