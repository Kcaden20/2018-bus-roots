// Menu Interaction Code by Lukas-Eigler Harding lukaslukas.com

/* Menu interaction */
$( document ).ready(function() {


	var offset = $(".body").offset(),
	topDistance = offset.top - $(document).scrollTop() - 72
	if (topDistance <= 0) {
		$(".page-menu").css({"pointer-events": "auto",
							 opacity: 1})
	}


	$( window ).scroll(function() {
		offset = $(".body").offset();
		topDistance = offset.top - $(document).scrollTop() - 72

		if (topDistance <= 0) {
			$(".page-menu").css({"pointer-events": "auto",
								 opacity: 1})
		} else{
			$(".page-menu").css({"pointer-events": "none",
					 opacity: 0})
		}

	})



	var menuHeight = $(".menu-list").outerHeight(); // get height of menu
	console.log(menuHeight)

	// initial menu positioning
	$(".page-menu").css({transform : "translateY(-" + menuHeight + "px)",
						"-webkit-transform" : "translateY(-" + menuHeight + "px)",
						"-moz-transform" : "translateY(-" + menuHeight + "px)"}) // translate postion of height of menu


	var clicked = false;
	$(".menu-icon, .menu-list>.menu-targets").click(function(){
		if (clicked) {
			clicked = false;
			$(".page-menu").css({transform : "translateY(-" + menuHeight + "px)",
								"-webkit-transform" : "translateY(-" + menuHeight + "px)",
								"-moz-transform" : "translateY(-" + menuHeight + "px)"})

			$(".body").css({"padding-top" : "36px"})
			$(".menu-icon").removeClass("exit-menu")

			// allow for smooth scrolling
			$('html').css({
           		overflow: 'auto',
            	height: 'auto'
        	})

		} else{
			clicked = true;
			$(".page-menu").css({transform : "translateY(" + 0 + "px)",
								 "-webkit-transform" : "translateY(" + 0 + "px)",
								 "-moz-transform" : "translateY(" + 0 + "px)"})

			$(".body").css({"padding-top" : menuHeight + 36 + "px"})
			$(".menu-icon").addClass("exit-menu")

			//disable scrolling of body at current position
	        $('html').css({
	        	overflow: 'hidden',
	         	height: '100%'
	        })

		}
	}) // end of menu icon click

	$(document).on('click', 'a[href^="#"]', function(e) {
	    // target element id
	    var id = $(this).attr('href');

	    // target element
	    var $id = $(id);
	    if ($id.length === 0) {
	        return;
	    }

	    // prevent standard hash navigation (avoid blinking in IE)
	    e.preventDefault();

	    // top position relative to the document

	    if ($(this).parent(".menu-list").length) {
	    	var pos = $id.offset().top - menuHeight
	    	$('body, html').animate({scrollTop: pos}, 0);
	    } else{
	    	var pos = $id.offset().top
	    	$('body, html').animate({scrollTop: pos});
	    }



	    // animated top scrolling

	});





}) // end of document ready



