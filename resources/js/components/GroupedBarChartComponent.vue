<template>
  <canvas ref="canvas"></canvas>
  <!-- <canvas ref="canvas" width="600" height="400"></canvas> -->
</template>

<script>
    import Chart from 'chart.js';

    export default {

      props: {
        labels: {},
        dataset1: {},
        dataset2: {},
      },
        // props: [
        //   labels: ['Jan', 'Feb', 'Mar', 'Apr']
        //   dataset1: {
        //     label: 'Africa',
        //     backgroundColor: "blue",
        //     data: [133, 221, 783, 2478]
        //   },
        //   dataset2: {
        //     label: 'Europe',
        //     backgroundColor: "red",
        //     data: [408, 547, 675, 734]
        //   }
        // ],
        // // props: ['labels', 'values'],

        mounted() {
          console.log('Inside GroupedBarChart component mounted().')
          // console.log(this.dataset1.data);

          new Chart(this.$refs.canvas, {
            type: 'bar',
            data: {
              labels: this.labels,

            datasets: [
                this.dataset1,
                this.dataset2,
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
