//graphe

const graph = document.getElementById('graph').getContext('2d');
let myChart = new Chart(graph, {
    type: 'doughnut',
    data: {
        labels: ['Petit déjeuner', 
        'Déjeuner', 
        'Collation', 
        'Dîner'],
        datasets: [{
            label: 'Total de la journée: 2265 KCAL',
            data: [20, 40, 15, 25],
            backgroundColor: [
                'rgba(67, 164, 216, 1)',
                'rgba(241, 146, 51, 1)',
                'rgba(251, 226, 4, 1)',
                'rgba(126, 243, 122, 1)',
            ],
            
            borderWidth: 1
        }]
    },

    
    options:{
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          position: 'right',
          fontSize : 50,
        }
      },
      title:{
        display: true,
        text:"Calories",
        fontSize: 14,
        
      },

      layout:{
        padding:{
        top: 10,
        
        },
      },

    },
});