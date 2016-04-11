$(function() {
    $( ".jquery-ui-select" ).selectmenu();
});


$(function() {
var spinner = $( ".spinner" ).spinner();
$( "button" ).button();
});

$(function() {
var spinner = $( "#spinner" ).spinner();
$( "button" ).button();
});


$('.size-line .size').click(function() {
  $(this).toggleClass('active');
});




// Initialize Swiper 
$(document).ready(function () {
var galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
});
var galleryThumbs = new Swiper('.gallery-thumbs', {
   	spaceBetween: 20,
   	slidesPerView: 'auto',
	centeredSlides: true,
   	slideToClickedSlide: true,
   	direction:'vertical',
});
galleryTop.params.control = galleryThumbs;
galleryThumbs.params.control = galleryTop;

});
