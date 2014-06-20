var elem = document.body; // Make the body go full screen.
requestFullScreen(elem);

function requestFullScreen(element) {
// Supports most browsers and their versions.
var requestMethod = element.requestFullScreen || element.webkitRequestFullScreen || element.mozRequestFullScreen || element.msRequestFullScreen;

if (requestMethod) { // Native full screen.
    requestMethod.call(element);
} else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
    var wscript = new ActiveXObject("WScript.Shell");
    if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }
}

$(document).ready(function(){
		$( "#verify-password" ).keyup(function() {
		  // get password value from first password field
		  var pwd = $('#password').val();
		  // get the 2nd password value from the verify password field
		  var vPwd = $('#verify-password').val();
		  // verify the values if they are matched
		  // if matched then show match alert | hide unmatch alert
		  if (pwd == vPwd) {
		  		$("#alert-verify-password-ok").removeClass('hide');
		  		$("#alert-verify-password-remove").addClass('hide');
		  } // else, show unmatch alert | hide match alert
		  else {
		  		$("#alert-verify-password-remove").removeClass('hide');
		  		$("#alert-verify-password-ok").addClass('hide');
		  }
		});

		//animate resizing font when mouse hovers to an icon on the side bar
		$(".icn-click").hover(
		    function(){
		    	$(this).animate({fontSize:'48px', color:'#beff00'}, 200);
		    	$(this).popover('show');
		    },        
		    function(){
		    	$(this).animate({fontSize:'32px'}, 200);
		    	$(this).popover('hide');
		    }
		);

		$(".panel-prop").hover(
			function(){
				$(this).popover('show');
			},
			function(){
				$(this).popover('hide');
			}
		);

		//datepickers
		$('#datepicker, #dpTo, #datepicker2, #dpFrom').datepicker();

		$(window).load(function(){
			$(".onload-slide")
				.animate({width:'100%',opacity:'1'}, 500);
		});

		//show popover for form options
		$(".option-circle").hover(
			function(){
				$(this).popover('show');
			},
			function(){
				$(this).popover('hide');
			}
		);
		//show options for 
		$('.tbl-prop').click(function(){
			$('.form-option').animate({width:'516px',opacity:'1'}, 500);
			$('.option-circle').show();
		});

		//close options (add,edit,delete,cancel)
		$('.opt-last').click(function(){
			$('.form-option').animate({width:'0px',opacity:'0'}, 500);
			$('.option-circle').hide();
		});

		/*
		 Author:marc comia
		 description: checkbox for houssekeeping
		*/
		$('#chckall').click(function() {
			if($(this).is(':checked')) {
				$('.chckTask').each(function() {
					$(this).prop('checked','true');
					} );
			}else {
				$('.chckTask').each(function(){
					$(this).removeAttr('checked');
					});
			}
		});

		$('.chckTask').change(function() {
	    	if(!$(this).is(':checked')){
	    		$('#chckall').removeAttr('checked');
	    	}
	    } );

	    //custom button properties for reservation
	    $('#dpFrom,#dpTo').hide();
	    $('.btn-custom').click(function() {
	    	$('.btn-selection').removeClass('active');
	    	$(this).addClass('active');
	    	$('.slct-prop').hide();
	    	$('#dpFrom,#dpTo').show();
	    });
	    $('.btn-selection').click(function() {
	    	$('.btn-custom').removeClass('active');
	    	$(this).addClass('active');
	    	$('.slct-prop').show();
	    	$('#dpFrom,#dpTo').hide();
	    });
});

