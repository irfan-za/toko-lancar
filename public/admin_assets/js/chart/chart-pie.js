// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


let categoryName=[];
let categoryColor=['text-primary', 'text-success', 'text-info'];
let categoryStock=[];
// Fetch Data
async function fetchData(){
  try {
    const res= await fetch(`http://localhost:8000/dashboard/api`)
    const data= await res.json();
    if(res.ok){
      data.categories.map(p=>categoryName.push(p.name))
      data.categories.map(p=>categoryStock.push(p.products_count))
      
      // Pie Chart
      var ctx = document.getElementById("pieChart");
      var pieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: categoryName,
          datasets: [{
            data: categoryStock,
            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
          }],
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
          },
          legend: {
            display: false
          },
          cutoutPercentage: 80,
        },
      });
      
      // pie chart items
      const pieChartItems = document.getElementById("pieChartItems");
      categoryColor.map((color,i)=>{
        pieChartItems.innerHTML+= `
          <span class="mr-2">
              <i class="fas fa-circle ${color}"></i> ${categoryName[i]}
          </span>`
      })
    }
  }catch (error) {
    console.error('Gagal mengambil data:', error);
  }
}
fetchData();
