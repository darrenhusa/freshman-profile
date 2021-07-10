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
        }, // end props

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
                  data: this.values,
                }
              ]
            }, // end data
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
                }, // end scales
              responsive: false,
              maintainAspectRatio: false,
              legend: { display: false },
              title: {
                display: false,
                text: 'TITLE TEXT'
              },
              plugins: {
                  datalabels: {
                    color: 'white',
                    labels: {
                      title: {
                        font: {
                          weight: 'bold'
                        }
                      }
                    }
                  }
                } // end plugins
            } // end options
          }); // end new Chart
        } // end mounted() 
    } // end export default
</script>
