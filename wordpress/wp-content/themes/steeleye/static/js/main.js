$('#demo').RollingSlider({
  showArea:"#example",
  prev:"#jprev",
  next:"#jnext",
  moveSpeed:300,
  autoPlay:false
});

/**
 * main.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
(function() {

  var bodyEl = document.body,
    content = document.querySelector( '.main_content' ),
    openbtn = document.getElementById( 'open-button' ),
    closebtn = document.getElementById( 'close-button' ),
    isOpen = false;

  function init() {
    initEvents();
  }

  function initEvents() {
    openbtn.addEventListener( 'click', toggleMenu );
    if( closebtn ) {
      closebtn.addEventListener( 'click', toggleMenu );
    }

    // close the menu element if the target it´s not the menu element or one of its descendants..
    content.addEventListener( 'click', function(ev) {
      var target = ev.target;
      if( isOpen && target !== openbtn ) {
        toggleMenu();
      }
    } );
  }

  function toggleMenu() {
    if( isOpen ) {
      classie.remove( bodyEl, 'show_menu' );
    }
    else {
      classie.add( bodyEl, 'show_menu' );
    }
    isOpen = !isOpen;
  }

  init();

})();

// Sticky Header 
$(window).on("scroll", function() {
    if($(window).scrollTop() > 10) {
        $(".site_header").addClass("sticky");
    } else {
       $(".site_header").removeClass("sticky");
    }
});



$( document ).ready(function() {
  $(".menu_nav ul li").click(function(){
    $(".menu_nav ul li ul").addClass("active");
  });
});

// Equal Heights
/* Thanks to CSS Tricks for pointing out this bit of jQuery
https://css-tricks.com/equal-height-blocks-in-rows/
It's been modified into a function called at page load and then each time the page is resized. One large modification was to remove the set height before each new calculation. */

equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('.product_features .feature_block');
});


$(window).resize(function(){
  equalheight('.product_features .feature_block');
});

