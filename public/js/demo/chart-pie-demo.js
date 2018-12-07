// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Bom", "Medio", "Ruim"],
    datasets: [{
      data: [45, 15.58, 11.25],
      backgroundColor: ['#28a745', '#ffc107', '#dc3545'],
    }],
  },
});

var ctx2 = document.getElementById("myPieChart2");
var myPieChart2 = new Chart(ctx2, {
  type: 'pie',
  data: {
    labels: ["Bom", "Medio", "Ruim"],
    datasets: [{
      data: [20, 25, 11.25],
      backgroundColor: ['#28a745', '#ffc107', '#dc3545'],
    }],
  },
});

var ctx3 = document.getElementById("myPieChart3");
var myPieChart3 = new Chart(ctx3, {
  type: 'pie',
  data: {
    labels: ["Bom", "Medio", "Ruim"],
    datasets: [{
      data: [12.21, 15.58, 40],
      backgroundColor: ['#28a745', '#ffc107', '#dc3545'],
    }],
  },
});


