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
		$('#datepicker').datepicker();
		$('#datepicker2').datepicker();

		$(window).load(function(){
			$(".onload-slide")
				.animate({width:'100%',opacity:'1'}, 500);
		});

});


$(document).ready(function(){
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
});
		


