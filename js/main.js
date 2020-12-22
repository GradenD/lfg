$(document).ready(function(){
	$(function () {
		$('#carouselExampleIndicators').carousel({
			interval: 3000,
			pause: 'hover',
			ride: 'carousel',
		});
	});
	
	[].forEach.call(document.querySelectorAll('img[data-src]'), function(img)
	{
    	img.setAttribute('src', img.getAttribute('data-src'));
    	img.onload = function() {
    		img.removeAttribute('data-src');
 		};
	});
})

$("html, body").css({
    height: $(window).height()
});

var mybutton = document.getElementById("scroll-up");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

window.onload = function () {
    document.body.classList.add('loaded');
}