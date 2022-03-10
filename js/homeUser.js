//=================== Dalila Graphe =================

// const graph = document.getElementById('graph').getContext('2d');
// let myChart = new Chart(graph, {
//     type: 'line',
//     data: {
//         labels: ['Petit déjeuner', 
//         'Déjeuner', 
//         'Collation', 
//         'Dîner'],
//         datasets: [{
//             label: 'calories',
//             data: [20, 40, 15, 25],
//             backgroundColor: [
//                 'rgba(67, 164, 216, 1)',
//                 'rgba(241, 146, 51, 1)',
//                 'rgba(251, 226, 4, 1)',
//                 'rgba(126, 243, 122, 1)',
//             ],
//             borderWidth: 1
//         }]
//     },
//     options:{
//       responsive: true,
//       maintainAspectRatio: false,
//       title:{
//         display: true,
//         fontSize: 14,
//       },
//       layout:{
//         padding:{
//         top: 70,
       
//         },
//       },

//     },
// });



var xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      label: 'Calories',
      borderColor: '#fe9124',
      fill:false
    },{
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      label: 'Poids',
      borderColor: '#39ad90',
      fill: false
    }]
  },
  options: {
    responsive: true,
     
    legend: {
      display: true,
    
    }
  }
});

