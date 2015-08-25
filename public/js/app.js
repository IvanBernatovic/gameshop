$(document).ready(function(){
	$('tr[data-href]').on("click", function() {
		document.location = $(this).data('href');
	});

	$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
	    // Avoid following the href location when clicking
	    event.preventDefault(); 
	    // Avoid having the menu to close when clicking
	    event.stopPropagation(); 
	    // If a menu is already open we close it
	    //$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
	    // opening the one you clicked on
	    $(this).parent().addClass('open');

	    var menu = $(this).parent().find("ul");
	    var menupos = menu.offset();

	    if ((menupos.left + menu.width()) + 30 > $(window).width()) {
	    	var newpos = - menu.width();      
	    } else {
	    	var newpos = $(this).parent().width();
	    }
	    menu.css({ left:newpos });

	});

	// For showing States options if United States are selected as Country
	$('select#country_id').on('change', function(event) {
		if($(this).val() == 840) {
			$('div#states').removeClass('hide');
		} else {
			$('div#states').addClass('hide');
		}
	});

	// For showing new inputs if user want change shipping address
	$('input:radio[name="shippingAddress"]').change(
		function(){
			if ($(this).is(':checked') && $(this).val() == 'otherAddress') {
            	$('div#otherAddress').removeClass('hide');
            	$('html, body').animate({ scrollTop: $('div#otherAddress').offset().top }, 'slow');
            } else {
            	$('div#otherAddress').addClass('hide');
            }
        }
    );
});