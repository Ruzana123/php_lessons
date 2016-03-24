/*home*/

	/* Scroll events
=================================*/

$(window).scroll(function(){
if ($(window).scrollTop() >= 200) {
$('.static-header').addClass('fixed-header');

}
else {
$('.static-header').removeClass('fixed-header');
}
});



$(document).ready(function() {

$("#owl-demo").owlCarousel({

navigation : true, // Show next and prev buttons
slideSpeed : 300,
paginationSpeed : 400,
singleItem:true
});

});

$(document).ready(function() {

$("#owl-demo1").owlCarousel({

/*autoPlay: 2000, //Set AutoPlay to 3 seconds*/

items : 4
});

});
$(document).ready(function() {

$("#owl-demo2").owlCarousel({

/*autoPlay: 2000, //Set AutoPlay to 3 seconds*/

items : 4
});

});

$(document).ready(function() {

$("#owl-demo3").owlCarousel({

/*autoPlay: 2000, //Set AutoPlay to 3 seconds*/

items : 4,
});

});

$(document).ready(function() {

$("#owl-demo4").owlCarousel({

/*autoPlay: 2000, //Set AutoPlay to 3 seconds*/

items : 4
});

});

$(document).ready(function() {

$("#owl-demo5").owlCarousel({

/*autoPlay: 2000, //Set AutoPlay to 3 seconds*/

items : 4
});

});

$(document).ready(function() {

$("#owl-demo6").owlCarousel({

/*autoPlay: 2000, //Set AutoPlay to 3 seconds*/

items : 4
});

});

$(document).ready(function() {

$("#owl-demo7").owlCarousel({

/*autoPlay: 2000, //Set AutoPlay to 3 seconds*/

items : 4
});

});

$(document).ready(function() {

$("#owl-demo8").owlCarousel({

/*autoPlay: 2000, //Set AutoPlay to 3 seconds*/

items : 4
});

});








/*shop*/
$(function() {
$( "#slider-range" ).slider({
range: true,
min: 0,
max: 260,
values: [ 55, 215 ],
slide: function( event, ui ) {
$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
}
});
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
" - $" + $( "#slider-range" ).slider( "values", 1 ) );
});


$('.size-line li span').click(function () {
$(this).toggleClass('active');
});




/*soft*/

$(document).ready(function() {
$("#owl-demo-photo").owlCarousel({
//Set AutoPlay to 3 seconds

items : 3,
itemsDesktopSmall : [979,4], 
itemsTablet :[768,4],
itemsMobile :[477,2]
});
});

$(document).ready(function() {

$("#owl-pr").owlCarousel({

/*autoPlay: 2000, //Set AutoPlay to 3 seconds*/
    
items : 4,

});

});


$(document).ready(function () {
$(".sub > a").click(function() {
var ul = $(this).next(),
clone = ul.clone().css({"height":"auto"}).appendTo(".mini-menu"),
height = ul.css("height") === "0px" ? ul[0].scrollHeight + "px" : "0px";
clone.remove();
ul.animate({"height":height});
return false;
});
$('.mini-menu > ul > li > a').click(function(){
$('.sub a').removeClass('active');
$(this).addClass('active');
}),
$('.sub ul li a').click(function(){
$('.sub ul li a').removeClass('active');
$(this).addClass('active');
});
});




$(function() {
var spinner = $( "#spinner" ).spinner();
$( "button" ).button();
});



/*cart*/
$(function() {
$( "#country" ).selectmenu();
$( "#files" ).selectmenu();
$( "#number" )
.selectmenu()
.selectmenu( "menuWidget" )
.addClass( "overflow" );
});


/*check-out*/
$(function() {
$( "#country1" ).selectmenu();
$( "#files1" ).selectmenu();
$( "#number1" )
.selectmenu()
.selectmenu( "menuWidget" )
.addClass( "overflow" );
});




$(function() {
   $('#comment-button-more').click(function( e ) {
       e.preventDefault(); 
       $(".hidden-comment").css("display","block");
       $("#comment-button-more").css("display","none");
       $("#comment-button-hidden").css("display","block");
   });

    $('#comment-button-hidden').click(function( e ) {
      e.preventDefault();
       $(".hidden-comment").css("display","none");
       $("#comment-button-more").css("display","block");
       $("#comment-button-hidden").css("display","none");
       });
});






