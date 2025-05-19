$(document).ready(function(){

   new WOW().init();
	  AOS.init();
  
	$('.client-review').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
  jQuery(document).ready(($) => {
        $('.quantity').on('click', '.plus', function(e) {
            let $input = $(this).prev('input.qty');
            let val = parseInt($input.val());
            $input.val( val+1 ).change();
        });
 
        $('.quantity').on('click', '.minus', 
            function(e) {
            let $input = $(this).next('input.qty');
            var val = parseInt($input.val());
            if (val > 0) {
                $input.val( val-1 ).change();
            } 
        });
    });


/* back to top */

var btn = $('#button-top');
$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});



    
/* Sticky */

$(document).ready(function () {
    $(window).on("scroll", function () {
        var scrollTop = $(window).scrollTop(); 

        if (scrollTop > 100) {
            $(".sticky-nav").addClass("sticky").removeClass("fadeOutUp").addClass("fadeInDown");
            $(".looogoo").css("top", "60px");
        } else {
            $(".sticky-nav").removeClass("sticky fadeInDown").addClass("fadeOutUp");
            $(".looogoo").css("top", "100px");
        }
    });
});


});

document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : -1,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("count1", 50, 107, 1000);
 counter("count2", 9911, 10000, 1000);
 counter("count3", 0, 21, 1000);
  counter("count4", 10, 56, 1000);
});

