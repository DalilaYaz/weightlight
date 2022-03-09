const modalContainer = document.querySelector(".modal-container");
const modalTriggers = document.querySelectorAll(".modal-trigger");

modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal))

function toggleModal(){
  modalContainer.classList.toggle("active")
}


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//graphe

const graph = document.getElementById('graph').getContext('2d');
let myChart = new Chart(graph, {
    type: 'pie',
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
      title:{
        display: true,
        text:"Calories",
        fontSize: 14,
      },
      layout:{
        padding:{
        top: 10,
        backgroundColor: "red",
        
        },
      },

    },
});