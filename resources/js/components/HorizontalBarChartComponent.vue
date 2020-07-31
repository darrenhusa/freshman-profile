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
            type: 'horizontalBar',
            data: {
              labels: this.labels,
              datasets: [
                {
                  label: "Headcounts",
                  backgroundColor: ['blue', 'red', 'purple', 'lime'],
                  data: this.values
                }
              ]
            },
            options: {
              scales: {
                    xAxes: [{
                        ticks: {
                            min: 0 // Edit the value according to what you need
                        }
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                },
              responsive: true,
              maintainAspectRatio: false,
              legend: { display: false },
              title: {
                display: false,
                text: 'TITLE TEXT'
              }
            }
          });
        }
      }
</script>
