<template>
  <canvas ref="canvas" v-bind:width="width" v-bind:height="height"></canvas>
</template>

<script>
    import Chart from 'chart.js';
    import ChartDataLabels from 'chartjs-plugin-datalabels';

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

         data() {
           return {
             percentages: [],
             numberDecimalDigits: 0
           }
         }, // end data()

          methods: {
          
             calculateSum: function (list) {
               // loop over values to get the list sum
               var i;
               var sum = 0;
          
               for (i = 0; i < list.length; i++) {
                 sum += list[i];
               }
               return sum;
             }, // end calculateSum()
          
             calculatePercentages: function (list) {
               var percentages = [];
               var sum;
               var i;
               var result;

               sum = this.calculateSum(list);

               // loop over list values and calculate EACH percentage
               // return the percentages list
          
               for (i = 0; i < list.length; i++) {
                 result = (100.0 * list[i] / sum);
                 percentages.push(result.toFixed(this.numberDecimalDigits));
               }
               return percentages;
             } // end calculatePercentages()
           }, // end methods

        mounted() {
          // console.log('Inside mounted().')

          var context = this.$refs.canvas;

          this.percentages = this.calculatePercentages(this.values);

          // console.log(this.percentages)

          new Chart(context, {
              type: 'pie',
              data: {
                labels: this.labels,
                datasets: [{
                  label: "Headcounts in %",
                  backgroundColor: ['blue', 'red', 'purple', 'lime', 'orange'],
                  data: this.percentages
                }]
              }, // end data

              options: {
                responsive: false,
                maintainAspectRatio: false,
                title: {
                  display: false,
                  text: 'TITLE'
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
