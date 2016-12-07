// Javascript to toggle responsive menu list items
$( document ).ready(function() {
    console.log( "ready!" );
    $('.handle').on('click',function(){
      $('nav ul').toggleClass('show');
    });
});
