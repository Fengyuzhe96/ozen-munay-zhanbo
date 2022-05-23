$(document).ready(function(){
    $(".owl-carousel").owlCarousel( {
      items: 6,
      margin: 15,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
    });
  });




    document.getElementsByClassName("menu_toggle")[0].addEventListener("click", function() {
    document.getElementsByClassName("menu_nav_btn")[0].classList.toggle("open");
    });



    let menu_nav_btn = document.querySelector('.menu_nav_btn');
    let menu_list__toggle = document.querySelector('.menu_list__toggle');

      menu_nav_btn.addEventListener('click', function(){
      menu_nav_btn.classList.toggle('open');
      menu_list__toggle.classList.toggle('open');
})


    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function (event) {
      // Button that triggered the modal
      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var recipient = button.getAttribute('data-bs-whatever')
      // If necessary, you could initiate an AJAX request here
      // and then do the updating in a callback.
      //
      // Update the modal's content.
      var modalTitle = exampleModal.querySelector('.modal-title')
      var modalBodyInput = exampleModal.querySelector('.modal-body input')
    
      modalTitle.textContent = 'Задать вопрос '
      
    })
    var offcanvasElementList = Array.prototype.slice.call(document.querySelectorAll('.offcanvas'))
var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
  return new bootstrap.Offcanvas(offcanvasEl)
})