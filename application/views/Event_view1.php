<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="sub_visual" style="background:url('/img/sub/sub_visual03.jpg')center; background-size:cover">
	<div class="visual_txt">
		<h1 class="white"><img src="/img/logo_white.png"/><br /><span>새소식</span></h1>
	</div>
</div>

<div id="boardWrap">
	<div class="con_tit_wrap">
<div>
<form name="eventf">
    <table>      
        <tbody>
            <tr>
                <th>반려견 이름</th>
                <td><input type="text" name="pname" id="pname"></td>
                <th>반려견 생년월일</th>
                <td><input type="text" name="pbirth" id="pbirth"></td>
            </tr>
            <tr>
                <th>가입자이름</th>
                <td><input type="text" name="mname" id="mname"></td>
                <th>가입자 휴대폰번호</th>
                <td><input type="text" name="mhp" id="mhp"></td>
            </tr>
            <tr>
                <th>가입보험사</th>
                <td><select name="jinsu" id="jinsu">
                    <option value="">선택</option>
                    <option value="D">DB손해보험 Petsafe</option>
                    <option value="M">메리츠화재 펫퍼민트</option>
                    <option value="S">삼성화재 애니펫</option>
                </select></td>
                <th>가입증권번호</th>
                <td><input type="text" name="insustock" id="insustock"></td>
            </tr>
            <tr>
                <td colspan="4">개인정보수집 동의합니다. <input type="checkbox" name="eventconf" id="eventconf"></td>
            </tr>               
        </tbody>
    </table>
    <div><button type="button" id="eventsub">이벤트 참여하기</button></div>
</form>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#eventsub').on('click',function(){
            var petname = $('#pname');
            var petbirth = $('#pbirth');
            var mastername = $('#mname');
            var masterhp = $('#mhp');
            var joininsu = $('#jinsu option:selected');
            var joinstock = $('#insustock');
            var chkconfirm = $("#eventconf").prop("checked");
            if(!chkconfirm){
               alert('개인정보수집 동의에 체크 해주세요.');
               $("#eventconf").focus();    
               return false;
            } else {
                if(petname.val() == ''){
                    alert('반려동물 이름을 입력해주세요.');
                    petname.focus();
                    return false;
                }

                if(petbirth.val() == ''){
                    alert('반려동물 생년월일을 입력해주세요.');
                    petbirth.focus();
                    return false;    
                }

                if(mastername.val() == ''){
                    alert('가입자 이름을 입력해주세요.');
                    mastername.focus();
                    return false;
                }

                if(masterhp.val() == ''){
                    alert('가입자 휴대폰 번호를 입력해주세요.');
                    masterhp.focus();
                    return false;
                } else {
                    ///(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/g 맨 앞은 전화번호  | 뒤에는 휴대폰
                    var testhp = /(^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/g;
                    if(!testhp.test(masterhp.val())) {
                        alert('휴대폰 번호가 올바르지 않습니다. 정확히 입력해주세요.');
                        masterhp.focus();
                        return false;
                    }        
                }

                if(joininsu.val() == ''){
                    alert('가입보험사를 선택해주세요.');
                    joininsu.focus();
                    return false;
                }

                if(joinstock.val() == ''){
                    alert('가입증권번호를 입력해주세요.');
                    joinstock.focus();
                    return false;
                }
            }
        });
    });
</script>