<template>
  <canvas ref="canvas"></canvas>
  <!-- <canvas ref="canvas" width="600" height="400"></canvas> -->
</template>

<script>
    import Chart from 'chart.js';

    export default {
        // mounted() {
        //     console.log('Pie Chart Component mounted.')
        // },

        props: ['labels', 'values'],

        mounted() {
          // console.log('Inside mounted().')

          new Chart(this.$refs.canvas, {
              type: 'pie',
              data: {
                labels: this.labels,
                datasets: [{
                  label: "Headcounts in %",
                  backgroundColor: ["blue", "red"],
                  data: this.values
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
