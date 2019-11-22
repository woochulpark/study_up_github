

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

setTimeout(function(){
	skip()
},3000)

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

/*main faq*/
var faqnum=0;
$('.bo_box.faq dl dt').click(function(){

	var faq_item = $(this).parent('dl');
	var faqidx = faq_item.index();

	if(faqnum!=faqidx){
		faq_item.siblings().removeClass('active');
		faq_item.addClass('active');
		
		faq_item.find('dd').stop().slideDown('fast');
		faq_item.siblings().find('dd').stop().slideUp('fast');
	}
	faqnum=faqidx;
})

function section_in(i){
	var section_num = i;
	$('.section0'+section_num).addClass('animated');
	$('#fullpage-nav ul li').eq(section_num-1).addClass('active').siblings().removeClass('active');

	//section01
	if(section_num==1){
	
	}else{
	
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
		$('.chk_dog_size input[name=dog_size]').prop('checked',false);//191023 추가
	}
})