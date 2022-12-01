$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.modal').modal();
  });

$(".trigger").on("click", function(){
  $(".trigger").html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/ctkmxYkfAsY" title="G I G A C H A D - Song" frameborder="0" allow="accelerometer; autoplay="1"; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
});

var instance = M.Carousel.init({
  fullWidth: true,
  indicators: true
});

$('.carousel.carousel-slider').carousel({
  fullWidth: true,
  indicators: true
});

$("#easter-egg").on("click", function(){
  $("#easter-egg").html('<img src="img/easteregg.png" style="width: 50%;">')
});

$("#trigger").on("click", function(){
  $("#trigger").html('<img class="william" src="img/dossier-Dylan.jpg">')
});

$("#trigger-wg").on("click", function(){
  $("#trigger-wg").html('<img class="william" src="img/dossier-william.jpg">')
});




// $(".submit").click(function(){
//      window.open("easteregg.php");
//      })   