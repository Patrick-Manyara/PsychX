$(document).ready(function(){
  
  $(".carousel").carousel({
    pause: true
  });
  
  $( ".carousel .carousel-inner" ).swipe( {
    swipeLeft: function ( event, direction, distance, duration, fingerCount ) {
      this.parent( ).carousel( 'next' );
    },
    swipeRight: function ( ) {
      this.parent( ).carousel( 'prev' );
    },
    threshold: 0,
   
    //เอา  a ออกถ้าต้องการให้ slide ที่เป็น tag a สามารถคลิกได้
    excludedElements:"label, button, input, select, textarea, .noSwipe"
  } );
  
  $('.carousel .carousel-inner').on('dragstart', 'a', function () {
    return false;
  });  
  
});

