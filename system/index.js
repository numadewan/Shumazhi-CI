document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

$(document).ready(function(){
    $('.dropdown-trigger').sidenav();
});
 