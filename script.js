// Selecciona la opción del botón desplegable y reemplaza el texto del botón principal
function selectOption(optionText) {
    var dropdownBtn = document.querySelector('.dropbtn');
    dropdownBtn.innerText = optionText;
    toggleDropdown(); // Cierra el menú desplegable después de seleccionar una opción
  }
  
  // Muestra u oculta el menú desplegable
  function toggleDropdown() {
    var dropdown = document.getElementById("myDropdown");
    dropdown.classList.toggle("show");
  }
  
  // Cierra el menú desplegable si se hace clic fuera de él
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn') && !event.target.matches('.dropdown-content a')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  