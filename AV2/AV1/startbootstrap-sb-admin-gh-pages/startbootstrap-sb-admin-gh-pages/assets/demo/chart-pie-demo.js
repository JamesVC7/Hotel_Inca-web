// contenido del archivo js externo
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

var ctx = document.getElementById("myPieChart");

var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: dataLabels, // Utiliza la variable global para los labels
    datasets: [{
      data: dataValues, // Utiliza la variable global para los valores
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', '#6c757d'],
    }],
  },
});
