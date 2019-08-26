
 (function($) {
$(document).ready(function(){
  //Fab button integration
   $('.fixed-action-btn').floatingActionButton();
   $('.pushpin').pushpin();
   $('.scrollspy').scrollSpy({
     scrollOffset: 0
   });
    $('.sidenav').sidenav();
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
