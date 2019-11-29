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
                <td colspan="4">개인정보수집 동의합니다. <input type="checkbox" name="eventconf" id="eventconf" value="Y"></td>
            </tr>               
        </tbody>
    </table>
    <div><button type="button" id="eventsub">이벤트 참여하기</button></div>
</form>
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
            var chkconfirm = $("#eventconf option:checked");
            alert(chkconfirm.val());
        });
    });
</script>