//SCROLL ANIMATE
var winH = $(window).height();
var st = $(window).scrollTop();

$('.animate_con').each(function(){
	var animateConTop = $(this).offset().top
	if(st + winH > animateConTop){
		$(this).addClass('animated')
	}
})

$(window).scroll(function(){
	st = $(window).scrollTop();
	$('.animate_con').each(function(){
		var animateConTop = $(this).offset().top;
		if(st + winH > animateConTop){
			$(this).addClass('animated')
		}
	})
})

//FALLING MOTION
function falling_motion() {
	var fall = $('.falling_motion').offset().top;
	$(window).scroll(function(){	
		if(fall < st+winH && !$('.falling_motion').hasClass('active')){
			$('.falling_motion').addClass('active')
			TweenMax.fromTo($('.falling_figure1'), .5, {x:150,y:-150, opacity:0}, {x:0,y:0, opacity:1, delay:1} );
			TweenMax.fromTo($('.falling_figure2'), .5, {x:150,y:-150, opacity:0}, {x:0,y:0, opacity:1, delay:1.3} );
		}
	})
}

//FLOATING MOTION
function floating_motion() {
	TweenMax.to($('.floating_circle'), 10, {rotation:360, repeat:-1, ease: Power0.easeNone} );
	$(window).scroll(function(){
		$('.floating_circle').each(function(){
			var itemTop = $(this).offset().top;
			var itemtHeight = $(this).outerHeight()/2;
			var moveVal =(st+winH)-(itemTop+itemtHeight);
			
			if($(this).hasClass('reverse')){
				TweenMax.to($(this), 1, {y:-moveVal*.1} );
			}else{
				TweenMax.to($(this), 1, {y:moveVal*.1} );
			}	
		})
	})
}

//IE 버전 체크
function get_version_of_IE () { 
	 var word; 
	 var agent = navigator.userAgent.toLowerCase(); 
	 // IE old version ( IE 10 or Lower ) 
	 if ( navigator.appName == "Microsoft Internet Explorer" ) word = "msie "; 

	 // IE 11 
	 else if ( agent.search( "trident" ) > -1 ) word = "trident/.*rv:"; 

	 // Microsoft Edge  
	 else if ( agent.search( "edge/" ) > -1 ) word = "edge/"; 

	 // 그외, IE가 아니라면 ( If it's not IE or Edge )  
	 else return -1; 

	 var reg = new RegExp( word + "([0-9]{1,})(\\.{0,}[0-9]{0,1})" ); 

	 if (  reg.exec( agent ) != null  ) return parseFloat( RegExp.$1 + RegExp.$2 ); 

	 return -1; 
}

$(document).ready(function(){
	var ieVersion = get_version_of_IE ();
	if(ieVersion > 0){
		$('body').addClass('IE_'+ieVersion)
	}
})


//GO TOP
function go_top(){
	$('html,body').animate({'scrollTop':0})
}
