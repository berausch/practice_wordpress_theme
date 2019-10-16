
 (function($) {
$(document).ready(function(){
  //Fab button integration
   $('.fixed-action-btn').floatingActionButton();
   $('.pushpin').pushpin();
   $('.scrollspy').scrollSpy({
     scrollOffset: 0
   });
   $('.sidenav').sidenav();
   $('.modal').modal();
   $('.slider').slider();
   $('.carousel.carousel-slider').carousel({
  fullWidth: true,
});
// move next carousel
$('.moveNextCarousel').click(function(e){
   e.preventDefault();
   e.stopPropagation();
   $('.carousel').carousel('next');
});
// move prev carousel
$('.movePrevCarousel').click(function(event){
  event.preventDefault();
  event.stopPropagation();
  $('.carousel').carousel('prev');
});

 });


 $('.pushpin-nav').each(function() {
    var $this = $(this);
    var $target = $('#' + $(this).attr('data-target'));
    $this.pushpin({
      top: $target.offset().top,
      bottom: $target.offset().top + $target.outerHeight() - $this.height(),
      offset: 65
    });
  })

 })( jQuery );
