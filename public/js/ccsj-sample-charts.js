// Horizontal Bar chart
  new Chart(document.getElementById("hbc"), {
    type: 'horizontalBar',
    data: {
      labels: ["Female", "Male"],
      datasets: [
        {
          label: "Headcounts",
          backgroundColor: ["blue", "red"],
          data: [71, 53]
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
      // responsive: true,
      // maintainAspectRatio: false,
      legend: { display: false },
      title: {
        display: false,
        text: 'TITLE TEXT'
      }
    }
  });

// Pie chart
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
