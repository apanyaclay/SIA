// Inisialisasi data grafik
var data = {
    labels: ["Laki-laki", "Perempuan"],
    datasets: [{
      label: 'Jumlah Siswa',
      data: [20, 30],
      backgroundColor: [
        'rgb(255, 165, 0)',
        'rgb(255, 99, 132)',
      ],
      borderColor: [
        'rgb(255, 165, 0)',
        'rgb(255, 99, 132)',
      ],
      borderWidth: 1
    }]
  };
  
  // Inisialisasi grafik
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  // Fungsi untuk memperbarui data
  function updateChartData(newData) {
    myChart.data.datasets[0].data = newData;
    myChart.update();
  }
  
  // Contoh penggunaan fungsi untuk memperbarui data
  var newDataExample = [/* Jumlah siswa laki-laki baru, Jumlah siswa perempuan baru */];
  updateChartData(newDataExample);
  