<template>
  <canvas ref="canvas" v-bind:width="width" v-bind:height="height"></canvas>
</template>

<script>
    import Chart from 'chart.js';

    export default {

        props: {
          labels: Array,
          values: Array,
          width: {
            type: String,
            default: '300'
          },
          height: {
            type: String,
            default: '300'
          }
        },

        mounted() {
          // console.log('Inside mounted().')

          new Chart(this.$refs.canvas, {
            type: 'horizontalBar',
            data: {
              labels: this.labels,
              datasets: [
                {
                  label: "Headcounts",
                  backgroundColor: ['blue', 'red', 'purple', 'lime', 'orange'],
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
              responsive: false,
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
