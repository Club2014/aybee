/*****************************************************************************
	CONTACT FORM - you can change your notification message here
*****************************************************************************/
   $(document).ready(function(){	
			$("#ajax-contact-form").submit(function() {
				var str = $(this).serialize();		
				$.ajax({
					type: "POST",
					url: "contact_form/contact_process.php",
					data: str,
					success: function(msg) {
						// Message Sent - Show the 'Thank You' message and hide the form
						if(msg == 'OK') {
							result = '<div class="notification_ok">Votre message a bien été envoyé, Merci !</div>';
							$("#fields").hide();
						} else {
							result = msg;
						}
						$('#note').html(result);
					}
				});
				return false;
			});															
		});
/*****************************************************************************
	CSS3 ANIMATIONS
*****************************************************************************/
	jQuery('.jumbotron').appear(function() {
		$('.jumbotron').each(function(){
			$(this).addClass("fadeIn");
		});
	});
	jQuery('.hi-icon').appear(function() {
		$('.hi-icon').each(function(){
			$(this).addClass("fadeIn");
		});
	});
	jQuery('.grid').appear(function() {
		$('.grid').each(function(){
			$(this).addClass("slideRight");
		});
	});
	jQuery('.grida').appear(function() {
		$('.grida').each(function(){
			$(this).addClass("fadeIn");
		});
	});
	jQuery('#myCarousel').appear(function() {
		$('#myCarousel').each(function(){
			$(this).addClass("fadeIn");
		});
	});
	
	jQuery('.carousel2').appear(function() {
		$('.carousel2').each(function(){
			$(this).addClass("slideUp");
		});
	});
	jQuery('.pricing').appear(function() {
		$('.pricing').each(function(){
			$(this).addClass("slideRight");
		});
	});
	jQuery('.soon').appear(function() {
		$('.soon').each(function(){
			$(this).addClass("bounce");
		});
	});
	jQuery('#bar-1, #bar-2, #bar-3, #bar-4').appear(function() {
		$('#bar-1, #bar-2, #bar-3, #bar-4').each(function(){
			$(this).addClass("slideUp");
		});
	});
/*****************************************************************************
	ADD YOUR COUNTER NUMBERS HERE
*****************************************************************************/	
	jQuery('#counter-1').appear(function() {
		$('#counter-1').countTo({
			from: 0,
			to: 1440,
			speed: 4000,
			refreshInterval: 50,
			onComplete: function(value) { 
			//console.debug(this); 
			}
			});
		});
	jQuery('#counter-2').appear(function() {
		$('#counter-2').countTo({
			from: 0,
			to: 90,
			speed: 4000,
			refreshInterval: 50,
			onComplete: function(value) { 
			//console.debug(this); 
			}
			});
		});
	jQuery('#counter-3').appear(function() {
		 $('#counter-3').countTo({
			from: 0,
			to: 2001,
			speed: 4000,
			refreshInterval: 50,
			onComplete: function(value) { 
			//console.debug(this); 
			}
			});
		});

// carousel quotes speed, tooltip, nav collapde, modal box
jQuery('.carousel2').carousel({ interval: 4000})
$('[data-toggle="tooltip"]').tooltip({ 'placement': 'top' })
jQuery('.navbar .nav > li > a').click(function(){
jQuery('.navbar .in').removeClass('in').addClass('collapse').css('height', '0');
$('.modal').bigmodal('hide');
});

/*****************************************************************************
	GOOGLE MAP - ADD YOUR ADDRESS HERE
******************************************************************************/	
$(window).load(function() {
	$(".google-maps").gmap3({
    marker:{     
address:"Paris",  options:{icon: "img/marker.png"}},
    map:{
      options:{
styles: [ {
stylers: [
{ "visibility": "on" }, { "saturation": -60 }, { "gamma": 1 }]
}],
        zoom: 13,
		scrollwheel: false,
		mapTypeControl: false,
		streetViewControl: false,
		scalControl: false,
		draggable: false}
		}
	});	
});	
/*****************************************************************************
	SLIDER REVOLUTION
******************************************************************************/
$(document).ready(function() {
	if ($.fn.cssOriginal!=undefined)
	$.fn.css = $.fn.cssOriginal;
	$('.fullwidthbanner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:610,
			onHoverStop:"on",	
			navigationType:"none",		
			soloArrowLeftHOffset:0,
			soloArrowLeftVOffset:0,
			soloArrowRightHOffset:0,
			soloArrowRightVOffset:0,
			touchenabled:"on",			
			fullWidth:"on",
			shadow:0					
		});
		
//scrollers
	jQuery('.nav').localScroll(6000);
	jQuery('.scroll').localScroll(6000);
	jQuery('#top').localScroll(6000);
	
//scrollbar
	jQuery("body").niceScroll({cursorcolor:"#777", cursorborder:"0px", cursorwidth :"8px", zindex:"9999" });
  });

//skill bars
	setTimeout(function(){
	
 $('.progress .bar').each(function() {
            var me = $(this);
            var perc = me.attr("data-percentage");
			 var current_perc = 0;
			var progress = setInterval(function() {
                if (current_perc>=perc) {
                    clearInterval(progress);
                } else {
                    current_perc +=1;
                    me.css('width', (current_perc)+'%');
                }
				me.text((current_perc)+'%');
			}, 20);
		});
	},300);
	$('.bar-percentage[data-percentage]').each(function () {
  var progress = $(this);
  var percentage = Math.ceil($(this).attr('data-percentage'));
  $({countNum: 0}).animate({countNum: percentage}, {
    duration: 9000,
    easing:'linear',
    step: function() {
      // What todo on every count
      var pct = Math.floor(this.countNum) + '%';
      progress.text(pct) && progress.siblings().children().css('width',pct); }
		});
	
});	
