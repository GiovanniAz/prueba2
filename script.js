function selectOption(optionText) {
    var dropdownBtn = document.querySelector('.dropbtn');
    dropdownBtn.innerText = optionText;
    toggleDropdown(); 
  }
  
  function toggleDropdown() {
    var dropdown = document.getElementById("myDropdown");
    dropdown.classList.toggle("show");
  }
  
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
  
