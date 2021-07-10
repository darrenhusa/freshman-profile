<template>
  <!-- <canvas ref="canvas"></canvas> -->
  <canvas ref="canvas" width="300" height="300"></canvas>
</template>

<script>
    import Chart from 'chart.js';
    import ChartDataLabels from 'chartjs-plugin-datalabels';

    export default {

        props: ['labels', 'values'],

         data() {
           return {
             percentages: [],
             numberDecimalDigits: 0
           }
         },

          methods: {
          
             calculateSum: function (list) {
               // loop over values to get the list sum
               var i;
               var sum = 0;
          
               for (i = 0; i < list.length; i++) {
                 sum += list[i];
               }
               return sum;
             },
          
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
             }
           },

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
              },
              options: {
                responsive: false,
                maintainAspectRatio: false,
                title: {
                  display: false,
                  text: 'TITLE'
                },

                // TODO - Add a computed property to calculate the percentages??
                //
                // new code to display as %
                // plugins: {
                //     datalabels: {
                //         formatter: function(value, context) {
                //             return context.chart.data.labels[context.dataIndex];
                //         }
                //     }
                // }
              }

              // reference 1
              // formatter: function(value, context) {
              //     return context.dataIndex + ': ' + Math.round(value*100) + '%';
              // }

              // label for data at index 0 with value 0.23: "0: 23%"
              // label for data at index 1 with value 0.42: "1: 42%"
              // ...

              // reference 2
              // options: {
              //        plugins: {
              //            datalabels: {
              //                formatter: function(value, context) {
              //                    return context.chart.data.labels[context.dataIndex];
              //                }
              //            }
              //        }
              //    }
              //
            });
        }
    }
</script>
