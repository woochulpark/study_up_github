

function choicePath(kind){

	if(kind && kind != ''){
		
		var infoChk;
		var chPet;

		switch(kind){
			case 'insuch1':				
			case 'insuch2':			
			case 'insuch3':
				infoChk = 'insuchoice1';
			break;
			case 'petch1':			
			case 'petch2':
				infoChk = 'petchoice';
			break;
			case 'delich1':
			case 'delich2':
				infoChk = 'insuchoice';
			break;
			case 'sizech1':
			case 'sizech2':
			case 'sizech3':
				infoChk = 'petsize';
			break;
			case 'sickch1':
			case 'sickch2':
				infoChk = 'petsick';
			break;
		}

			switch(kind){
			case 'insuch1':	
				chPet = 'DB';
			break;
			case 'insuch2':			
				chPet = 'Samsung';
			break;
			case 'insuch3':
				chPet = 'Meritz';
			break;
			case 'petch1':		
				chPet = 'dog';
			break;
			case 'petch2':
				chPet = 'cat';
			break;
			case 'delich1':
				chPet = 'Month';
			break;
			case 'delich2':
				chPet = 'Year';
			break;
			case 'sizech1':
				chPet = 'Big';
			break;
			case 'sizech2':
				chPet = 'Middle';
			break;
			case 'sizech3':
				chPet = 'Small';
			break;
			case 'sickch1':
				chPet = 'Yes';
			break;
			case 'sickch2':
				chPet = 'No';
			break;
		}

		$.post('/chkinsurance', {basech:infoChk , secondch:chPet }, function (data){			
			if(data.Msg){			
				location.replace(data.Locate);
			} else {
				alert('안됐다');
			}			

		},"json").done(function(){
		
		
		}).fail(function(){
		
		});
	}
}


function chkname(fld)
{

    var pattern = /([^가-힣\x20^a-z^A-Z^0-9])/i;

    if (!pattern.test(fld.value)) {
      
    }
}

function submit_pet(){
	
	var infoChk;
	var chPet;
	var infoBirth;
	var infoName;
	var chPet;
	var chSick;
	var chRegi;
	 infoChk = $('#basech').val();
	 infoBirth = $('#petbirth').val();
	 infoName = $('#petname').val();

	if(infoBirth == ''){
		alert('반려동물 생년월일을 입력해 주세요');
		//$('#petbirth').focus();
		return false;
	}

	if(infoName == ''){
		alert('반려동물 이름을 입력해주세요.');
		$('#petname').focus();
		return false;
	}
	
	if(!$('input[name=pet_cate]').is(':checked')){
		alert('반려동물을 선택해주세요.');
		return false;
	} else {
		chPet = ($('input[name=pet_cate]:checked').val() == '01') ? "dog" : 'cat';
	}
	
	if(!$('input[name=dog_sick]').is(":checked")){
		alert('최근 90일 이내 치료이력을 선택해주세요');
		return false;
	} else {
		chSick = ($('input[name=dog_sick]:checked').val() == 'Y') ? "Yes":'No';
	}
	if($('input[name=pet_cate]:checked').val() == '01' && !$('input[name=dog_regi]').is(':checked')){
		//if(!$('input[name=dog_regi]').is(':checked')){
			alert('반려견 등록증 여부를 선택해주세요.');
			return false;
	//	}		
	} else {
	
			chRegi = ($('input[name=dog_regi]:checked').val() == 'Y') ? "Yes":'No';
	}

	$.post('/chkinsurance', {basech:infoChk , secondch:chPet, putinfo1:infoBirth, putinfo2:infoName, chinfo1:chSick, chinfo2: chRegi}, function (data){			

			if(data.Msg == "true"){		
				location.href = data.Locate;
				$('form[name=info_put]').each(function(){
					this.reset();
				});
			} else {
				alert('안됐다');
			}			

	},"json").done(function(){
		
		
	}).fail(function(){
		
	});
}

function confirm_insuran(kind){
	is_safari();
	var prt_locate;
	$.post('/conf_insu', {mvch:kind}, function (data){
	
		if(data.Msg == "true"){
event.preventDefault();
			//if(confirm('해당사이트로 이동합니다. ')){
				//window.open(data.Locate, "_blank");

				//$('#popzone').popupWindow({windowURL:data.Locate});
				$.popupWindow(data.Locate,{width:1200, height:900});
		//	}
	
		} else {
			//prt_locate  = false;
		}	
			//return prt_locate;	
	},"json").done(function(){
		
		
	}).fail(function(){
		
	});
	
}


function is_safari(){
	var ua = navigator.userAgent.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i),
		  browser;
	  if (navigator.userAgent.match(/Edge/i) || navigator.userAgent.match(/Trident.*rv[ :]*11\./i)) {
		browser = "msie";
	  }
	  else {
		browser = ua[1].toLowerCase();
	  }
	  if(browser == 'safari'){
		alert('[사파리 브라우저 팝업 안내]\n 아이폰 사파리 브라우저에서는 팝업이 제한되어 [설정] > [Safari]로 이동하셔서 \'팝업차단\'을 비활성화 해주셔야 다이렉트 페이지로 이동하실 수 있습니다.')	 ; 
		//$('#petNm').attr("disabled",true);
	  }
}





function img_resize(){
	$('.bo_view_con').find('img').css('width','100%');
	$('.bo_view_con').find('img').css('height','auto');
}