// Side Nav Test
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  // --------------------------------------------------------------------

  /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunctionhyd() {
  document.getElementById("myDropdownhyd").classList.toggle("show");
}
function myFunctionpne() {
  document.getElementById("myDropdownpne").classList.toggle("show");
}
function myFunctioncen() {
  document.getElementById("myDropdowncen").classList.toggle("show");
}
function myFunctionmec() {
  document.getElementById("myDropdownmec").classList.toggle("show");
}
function myFunctionele() {
  document.getElementById("myDropdownele").classList.toggle("show");
}
function myFunctionplc() {
  document.getElementById("myDropdownplc").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
