$(document).ready(function(){
  $('.sl-slide').slick({
  	vertical: true,
  	slidesToShow: 2,
  });
});

$(document).ready(function(){
  $('.carousel-div1').slick({
 	slidesToShow: 3,
 	asNavFor: '.carousel-div2',
 	arrows: false,
 	focusOnSelect: true,
 	centerMode: true,
 	centerPadding: '0px',
  });
  $('.carousel-div2').slick({
  	slidesToShow: 1,
  	asNavFor: '.carousel-div1',
  	swipe: false,
  	arrows: false,
  	fade: true,
  })
});