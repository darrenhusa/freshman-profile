<template>
  <!-- <canvas ref="canvas"></canvas> -->
  <canvas ref="canvas" width="300" height="200"></canvas>
</template>

<script>
    import Chart from 'chart.js';
    import ChartDataLabels from 'chartjs-plugin-datalabels';

    export default {

        props: ['labels', 'values'],

        // data() {
        //   return {
        //     sum: 0,
        //     percentages: [],
        //     numberDecimals: 0
        //   }
        // },

        // computed: {
        //   // a computed getter
        //   reversedMessage: function () {
        //     // `this` points to the vm instance
        //     return this.message.split('').reverse().join('')
        //   }
        // },

          // methods: {
          //   reverseMessage: function () {
          //     return this.message.split('').reverse().join('')
          //   }
          // },

          // methods: {
          //
          //   calculateSum: function () {
          //     // loop over values to get the list sum
          //     var i;
          //     var sum = 0;
          //
          //     for (i = 0; i < this.values.length; i++) {
          //       sum += this.values[i];
          //     }
          //     return sum;
          //   },
          //
          //   calculatePercentages: function () {
          //     var percentages = [];
          //
          //     // loop over list values and calculate EACH percentage
          //     // return the percentages list
          //
          //     // var percent = (percentToGet / 100) * number;
          //     for (i = 0; i < this.values.length; i++) {
          //       percentages.push( ((this.values[i] / 100) * this.sum) );
          //     }
          //     this.percentages = percentages;
          //   }
          // },

        mounted() {
          // console.log('Inside mounted().')

          var context = this.$refs.canvas;

          // this.sum = calculateSum();
          // this.sum = calculateSum(this.values);
          // this.sum = calculateSum(this.values);

          new Chart(context, {
              type: 'pie',
              data: {
                labels: this.labels,
                datasets: [{
                  label: "Headcounts in %",
                  backgroundColor: ['blue', 'red', 'purple', 'lime', 'orange'],
                  data: this.values
                  // data: calculatePercentages()
                }]
              },
              options: {
                responsive: true,
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
