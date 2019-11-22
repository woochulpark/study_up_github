

/*fullpage*/
$('#fullpage').fullpage({
	responsiveWidth: 1024,
	onLeave: function(origin, destination, direction){
		var leavingSection = this;
		var idx = destination.index;
		section_in(idx+1)
	},
	afterLoad:function(origin, destination, direction){
		var loadedSection = this;
		
		if(destination.index==4 && loadedSection.index==3){
		
		}else{
			section_out(loadedSection.index+1);
		}
	},
	licenseKey:'FA85AFAB-42F54E5F-ACD448C1-66A67F6C'
});
fullpage_api.setAllowScrolling(false);


/*loader start*/
var textWrapper1 = document.querySelector('.loader_inner .txt_line1');
var textWrapper2 = document.querySelector('.loader_inner .txt_line2');
textWrapper1.innerHTML = textWrapper1.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
$('.loader_inner .text').css('opacity','1');
$('.loader_inner .skip').addClass('active');

$('.txt_line1 .letter').each(function(idx,e){
	var that = $(this);
	setTimeout(function(){
		that.addClass('active')
	},200+30*idx)	
})
$('.txt_line2 .letter').each(function(idx,e){
	var that = $(this);	
	setTimeout(function(){
		that.addClass('active')
	},400+30*idx)	
})


/*loader skip*/
var load_state = 0
function skip(){
	if(load_state==0){
		load_state=1;
		$('#loader .bg').addClass('stop');
		$('#loader .bg2').stop().animate({'top':'-100%'},400,'easeInOutQuad');
		$('#loader .bg1').stop().delay(200).animate({'top':'-100%'},400,'easeInOutQuad',function(){
			$('#loader').fadeOut(200)
		})
		$('.loader_inner').stop().delay(300).animate({'opacity':'0'},300);
		fullpage_api.setAllowScrolling(true);
		section_in(1);
		section01_bg_time();
	}
}

//로딩 3초후 스킵
setTimeout(function(){
	skip()
},3000)

//191101 추가
//로딩없는 버전시 3초후 스킵 지우고 아래 코드 추가
/*
$('#loader').css('display','none');
skip();
*/

/*main product list slide*/
$('.main_product_slide').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
	]
});


function section_in(i){//section_in() 191101 수정
	var section_num = i;
	$('.section0'+section_num).addClass('animated');
	$('#fullpage-nav ul li').eq(section_num-1).addClass('active').siblings().removeClass('active');
	//section01
	if(section_num==1){
		TweenMax.fromTo($('.falling_figure1'), .5, {x:150,y:-150, opacity:0},{x:0,y:0, opacity:1, delay:.5} );
		TweenMax.fromTo($('.falling_figure2'), .5, {x:150,y:-150, opacity:0},{x:0,y:0, opacity:1, delay:.8} );
	}else{
		TweenMax.to($('.falling_figure1'), .5, {x:150,y:-150, opacity:0} );
		TweenMax.to($('.falling_figure2'), .5, {x:150,y:-150, opacity:0} );
	}
	
	//section02
	if(section_num==2){
	
	}else{
	
	}

	//section03
	if(section_num==3){
		
	}else{
		
	}

	//section04
	if(section_num==4){
		$('#fullpage-nav').addClass('black');
		$('.scroll_box').addClass('black');
	}else{
		$('#fullpage-nav').removeClass('black');
		$('.scroll_box').removeClass('black');
	}

	//section05
	if(section_num==5){
		$('#fullpage-nav').addClass('hidden');
		$('.scroll_box').stop().animate({'opacity':0})
	}else{
		$('#fullpage-nav').removeClass('hidden');
		$('.scroll_box').stop().animate({'opacity':1})
	}
}

function section_out(i){
	var section_num = i;
	$('.section0'+section_num).removeClass('animated');	
}

var bg_time=0;
var bg_num=1;
function section01_bg_time(){
	setInterval(function(){
		bg_time++;
		if(bg_time > 60){
			//bg_time=0;
			bg_num++;
			if(bg_num > 2){
				bg_num=1;
			}
			section01_bg(bg_num)
		}
		
	},100)
}

function section01_bg(i){
	bg_time = 0;
	bg_num = i;
	$('.section01 .bg'+bg_num).addClass('active').siblings().removeClass('active');
	$('.section01 .icon_list'+bg_num).addClass('active').siblings().removeClass('active');
}


$("input[name='pet_cate']").click(function(){
	var dogchk = $('#chk_dog').is(':checked');
	if(dogchk){
		$('.ins_search_box .chk_dog_size').css('display','block');	
	}else{
		$('.ins_search_box .chk_dog_size').css('display','none');
		$('.chk_dog_size input[name=dog_size]').prop('checked',false);
	}
})


/*main faq 
191101수정*/
$('.faq_list dl dt').click(function(){
	var faq_item = $(this).parent('dl');
	if(faq_item.hasClass('active')){
		//열림
	}else{
		//닫힘->열림
		faq_item.addClass('active');
		faq_item.siblings().removeClass('active');
		faq_item.find('dd').slideDown();
		faq_item.siblings().find('dd').slideUp();
	}
})

/*191101추가*/
$('.faq_tab ul li').click(function(){
	var idx = $(this).index()+1;
	$(this).addClass('active').siblings().removeClass('active');
	$('.main_notice_wrap .faq_list').removeClass('active');
	$('.main_notice_wrap .faq_list'+idx).addClass('active');
})
