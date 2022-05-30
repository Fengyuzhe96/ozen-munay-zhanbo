$(document).ready(function(){
    $(".owl-carousel").owlCarousel( {
      items: 6,
      loop: true,
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
    document.getElementsByClassName("menu-nav__btn")[0].classList.toggle("open");
    });



    let menu_nav = document.querySelector('.menu-nav__btn');
    let menu_toggle = document.querySelector('.menu-nav__list_toggle');

      menu_nav.addEventListener('click', function(){
      menu_nav.classList.toggle('open');
      menu_toggle.classList.toggle('open');
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