<style>
/********레이어팝업창*********/
.layer {display:none; position:fixed; _position:absolute; top:0; left:0; width:100%; height:100%; z-index:9999;}
.layer .bg {position:absolute; top:0; left:0; width:100%; height:100%; background:#000; opacity:.5; filter:alpha(opacity=50);}
.layer .pop-layer {display:block;}
.pop-layer {display:none; position: absolute; top:50%; left:50%; width:1100px; height:auto;  background-color:#f7f7f7; z-index: 10;}    
.pop-layer .pop-container {padding: 20px 20px 20px; overflow:hidden;}
.pop-layer p.ctxt {color: #666; line-height:25px; text-align:center;}
.pop-layer p.ctxt img{max-width:139px;}
.pop-layer .login-input{background-color:#fff; border:1px solid #ddd; width:100%; padding:10px; box-sizing:border-box; margin:4px 0px}
.pop-layer .login-input[type="password"]{font-family:'dotum'}
.pop-layer .btn-r {text-align:right;}

.relative-box {
    position: relative;
    width: 100%;
    height: 100%;
}
.relative-box .close {
    position: absolute;
    top: -33px;
    right: -90px;
    width: 49px;
    height: 49px;
    background: url(/assets/images/mobile/right_close.png) center center no-repeat;
    cursor: pointer;
}
.w100 {
    width: 100% !important;
}
.bg-modal .page-modal-bg {
    background: url(/assets/images/front/general/page_bg.png) no-repeat;
    background-position: 0 100%;
    background-size: 100%;
    text-align: center;
    margin-bottom: 0px;
    padding-bottom: 0px;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .header-bar {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin-top: 30px;
    background: #1BA1A3;
    padding: 10px;
    border-radius: 8px;
    text-align: center;
    display: table;
    width: 100%;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .page-content {
    margin-top: 30px;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .page-content .row {
    overflow: hidden;
    margin-bottom: 10px;
	padding:0 20px;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .page-content .row .left {
    color: #1BA1A3;
    border-top: 3px solid #1BA1A3;
    padding-top: 5px;
    font-size: 15px;
    float: left;
    width: 15%;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .page-content .row .right {
    float: right;
    width: 84%;
    margin-left: 1%;
    border-top: 3px solid #e0e0e0;
    color: #7e7e7e;
    font-size: 13.5px;
    padding-top: 5px;
    line-height: 20px;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .page-content .button-area {
    overflow: hidden;
    margin-bottom: 10px;
    margin-top: 50px;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .page-content .button-area .primary-button {
    border: 2px solid #1BA1A3;
    text-align: center;
    padding: 10px 0;
    font-size: 17px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    color: #fff;
    background: #1BA1A3;
	width:100%
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .page-content .button-area .primary-button:hover {
	background-color:#444;
	border: 2px solid #444;

	}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .header-bar .inner-box {
    display: table-cell;
    vertical-align: middle;
    line-height: 10px;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .header-bar .inner-box ul li span.bold {
    font-size: 16px;
    margin-right: 10px;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .header-bar .inner-box ul li span {
    color: #fff;
    font-size: 15px;
}
.modal-diploma .relative-box .w100.bg-modal .page-content-box .header-bar .inner-box ul li {
    float: left;
}
.bg-modal .page-modal-bg .page-title {
    display: inline-block;
    color: #333;
    font-size: 24px;
    letter-spacing: -1px;
    vertical-align: super;
}
.inner-box ul {
    display: inline-block;
    list-style-type: none;
	padding-top:5px;
}

input[type='radio'] {
    background: #fff;
    border: solid 1px #707070;
    height: 20px;
    width: 20px;
	margin-right:5px;
    vertical-align: middle;
    -webkit-appearance: none;
    border-radius: 13px;
    -moz-border-radius: 13px;
    -webkit-border-radius: 13px;
    padding: 0;
    border: 0 \0/IE8+9;
    margin-top: -1px;
    margin-top: 2px \0/IE8+9;
}
input[type='radio']:checked:after {
    content: "";
    display: block;
    width: 10px;
    height: 10px;
    background: #777;
    position: relative;
    top: 4px;
    left: 4px;
    -webkit-border-radius: 10px;
}
</style>

<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 우편번호
$wr_addr    = explode("|",$write[wr_1]);
$zip1   = $wr_addr[0];
$zip2   = $wr_addr[1];
$addr1  = $wr_addr[2];
$addr2  = $wr_addr[3]; 

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<div id="wrapper">
	<div id="container">

<section id="bo_w" style="font-family: 'NanumSquareRound',sans-serif; font-size:1.2em;">
    <!--<h2 id="container_title"><?php echo $g5['title'] ?></h2>-->
	<p style="text-align:center; font-size:3em; padding:50px 0 30px 0; font-family: 'NanumSquareRound',sans-serif;"><?php echo $board['bo_subject'] ?></p>

	<img src="/img/online1.jpg" alt=""><br><br><br>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">html</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
        }
    }

    echo $option_hidden;
    ?>

	<div class="tbl_frm01 tbl_wrap">
        <p style="color:#1e439a; font-size:1.5em; line-height:2em;"><b>수업희망지역</b></p>
		<table style="border-top:2px solid #1e439a;">
        <tbody>
			<tr>
				<th>시도</th>
				<td colspan="3"><input type="text" name="wr_1" id="wr_1" value="<?php echo $wr_1 ?>"></td>
			</tr>
			<tr>
				<th>구군</th>
				<td colspan="3"><input type="text" name="wr_2" value="<?php echo $wr_2 ?>" id="wr_2" required class="frm_input required" size="20" maxlength="20" style="height:2.2em; font-size:1.2em; padding-left:10px;"></td>
			</tr>
		</tbody>
		</table>
	</div>

    <div class="tbl_frm01 tbl_wrap">
        <p style="color:#1e439a; font-size:1.5em; line-height:2em;"><b>지원서 작성</b></p>
		<table style="border-top:2px solid #1e439a;">
        <tbody>
        <?php if ($is_name) { ?>
        <tr>
            <th scope="row"><label for="wr_name">이름<strong class="sound_only">필수</strong></label></th>
            <td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="20" maxlength="20"></td>
        </tr>
        <?php } ?>

		<tr>
        	<th>생년월일</th>
            <td colspan="3"><input type="text" name="wr_8" id="wr_8" value="<?php echo $wr_8 ?>"> <input type="text" name="wr_3" id="wr_3" value="<?php echo $wr_3 ?>"> <input type="text" name="wr_5" id="wr_5" value="<?php echo $wr_5 ?>"></td>
		</tr>
		
		<tr>
        	<th>성별</th>
            <td colspan="3"><input type="text" name="wr_4" id="wr_4" value="<?php echo $wr_4 ?>"></td>
		</tr>

		<tr>
            <th scope="row"><label for="wr_subject">핸드폰<strong class="sound_only">필수</strong></label></th>
            <td>
                <div id="autosave_wrapper">
                    <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255" style="height:2.2em; font-size:1.2em; padding-left:10px;">
                    <!--
					<?php if ($is_member) { // 임시 저장된 글 기능 ?>
                    <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
                    <?php if($editor_content_js) echo $editor_content_js; ?>
                    <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
                    <div id="autosave_pop">
                        <strong>임시 저장된 글 목록</strong>
                        <div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
                        <ul></ul>
                        <div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
                    </div>
                    <?php } ?>	-->
                </div>
            </td>
        </tr>

		<!--
		<?php if ($is_homepage) { ?>
        <tr>
            <th scope="row"><label for="wr_homepage">홈페이지</label></th>
            <td><input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input" size="50"></td>
        </tr>
        <?php } ?>
        
		<?php if ($is_password) { ?>
        <tr>
            <th scope="row"><label for="wr_password">비밀번호<strong class="sound_only">필수</strong></label></th>
            <td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" maxlength="20"></td>
        </tr>
        <?php } ?>-->

        <?php if ($is_email) { ?>
        <tr>
            <th scope="row"><label for="wr_email">이메일</label></th>
            <td><input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" size="50" maxlength="100"></td>
        </tr>
        <?php } ?>


				<tr>
                    <th scope="row">주소</th>
                    <td>
                        <input type="text" name="zip1" value="<?php echo $zip1; ?>" id="postcode" title="우편번호" class="frm_input" size="5" maxlength="5" style="width:100px; height:2.2em; font-size:1.2em; padding-left:10px; margin-bottom:10px;">
                        <input type="button" onclick="openDaumPostcode()" value="우편번호 찾기" style="width:130px; background-color:#ECECEC; height:2.2em; font-size:1em; font-family: 'NanumSquareRound',sans-serif;"><br>
                        <input type="text" name="wr_6" value="<?php echo $wr_6 ?>" id="addr" placeholder="주소" class="frm_input" style="width:45%; height:2.2em; font-size:1.2em; padding-left:10px; font-family: 'NanumSquareRound',sans-serif;">
                        <input type="text" name="addr2" value="<?php echo $addr2; ?>" id="addr2" placeholder="상세주소" class="frm_input" style="width:45%; height:2.2em; font-size:1.2em; padding-left:10px; font-family: 'NanumSquareRound',sans-serif;">
                    </td>
                </tr> 
                <?php if($_SERVER['HTTPS'] === "on"){ ?><script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
                <?php } else { ?><script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script><?php } ?>
                <script>
                    function openDaumPostcode() {
                        new daum.Postcode({
                            oncomplete: function(data) {
                                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
                
                                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                                var fullAddr = ''; // 최종 주소 변수
                                var extraAddr = ''; // 조합형 주소 변수
                
                                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                                    fullAddr = data.roadAddress;
                
                                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                                    fullAddr = data.jibunAddress;
                                }
                
                                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                                if(data.userSelectedType === 'R'){
                                    //법정동명이 있을 경우 추가한다.
                                    if(data.bname !== ''){
                                        extraAddr += data.bname;
                                    }
                                    // 건물명이 있을 경우 추가한다.
                                    if(data.buildingName !== ''){
                                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                                    }
                                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                                }
                
                                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                                document.getElementById('postcode').value = data.zonecode; //5자리 새우편번호 사용
                                document.getElementById('addr').value = fullAddr;
                
                                // 커서를 상세주소 필드로 이동한다.
                                document.getElementById('addr2').focus();
                            }
                        }).open();
                    }
                </script> 
				<!--주소검색 끝-->

		<tr>
			<th rowspan="2">학력</th>
            <td colspan="3">
				<input type="text" name="wr_9" id="wr_9" value="<?php echo $wr_9 ?>"> <input type="text" name="wr_10" id="wr_10" value="<?php echo $wr_10 ?>"> ~
				<input type="text" name="wr_11" id="wr_11" value="<?php echo $wr_11 ?>"> <input type="text" name="wr_12" id="wr_12" value="<?php echo $wr_12 ?>">
				<input type="text" name="wr_7" value="<?php echo $wr_7 ?>" id="wr_7" class="frm_input" size="20" maxlength="20" placeholder="대학교" style="font-family: 'NanumSquareRound',sans-serif;">
				<input type="text" name="wr_school4" value="<?php echo $wr_school4 ?>" id="wr_school4" class="frm_input" size="20" maxlength="20" placeholder="전공" style="font-family: 'NanumSquareRound',sans-serif;">
			</td>
		</tr>
		<tr>
            <td colspan="3">
				<input type="text" name="wr_20" id="wr_20" value="<?php echo $wr_22 ?>"> <input type="text" name="wr_21" id="wr_21" value="<?php echo $wr_21 ?>"> ~
				<input type="text" name="wr_22" id="wr_22" value="<?php echo $wr_22 ?>"> <input type="text" name="wr_23" id="wr_23" value="<?php echo $wr_23 ?>">
				<input type="text" name="wr_school5" value="<?php echo $wr_school5 ?>" id="wr_school5" class="frm_input" size="20" maxlength="20" placeholder="대학원" style="font-family: 'NanumSquareRound',sans-serif;">
				<input type="text" name="wr_school6" value="<?php echo $wr_school6 ?>" id="wr_school6" class="frm_input" size="20" maxlength="20" placeholder="전공" style="font-family: 'NanumSquareRound',sans-serif;">
			</td>
		</tr>
 

        <?php if ($option) { ?>
        <tr>
            <th scope="row">옵션</th>
            <td><?php echo $option ?></td>
        </tr>
        <?php } ?>

        <?php if ($is_category) { ?>
        <tr>
            <th scope="row"><label for="ca_name">분류<strong class="sound_only">필수</strong></label></th>
            <td>
                <select name="ca_name" id="ca_name" required class="required" >
                    <option value="">선택하세요</option>
                    <?php echo $category_option ?>
                </select>
            </td>
        </tr>
        <?php } ?>

        <tr>
            <th scope="row"><label for="wr_content">경력사항<br>및 자기소개<strong class="sound_only">필수</strong></label></th>
            <td class="wr_content">
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                <?php } ?>
                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                <?php } ?>
            </td>
        </tr>
		<!--
        <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
        <tr>
            <th scope="row"><label for="wr_link<?php echo $i ?>">링크 #<?php echo $i ?></label></th>
            <td><input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input" size="50"></td>
        </tr>
        <?php } ?> -->

        <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
        <tr>
            <th scope="row">파일 #<?php echo $i+1 ?></th>
            <td>
                <input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file frm_input">
                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input" size="50">
                <?php } ?>
                <?php if($w == 'u' && $file[$i]['file']) { ?>
                <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>

        </tbody>
        </table>
    </div>


		<script src="/js/makebox.js"></script>
			<script>
			$( '#wr_99' ).makeBox('선택,00분,10분,20분,30분,40분,50분', 'checkbox' );
			</script>
			
			<script>
			$( '#wr_4' ).makeBox( '남,여', 'radio' );
			</script>

			<script>
			$( '#wr_8' ).makeBox('년,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980,1979,1978,1977,1976,1975,1974,1973,1972,1971,1970,1969,1968,1967,1966,1965,1964,1963,1962,1961,1960', 'select' );
			</script>

			<script>
			$( '#wr_9' ).makeBox('년,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980,1979,1978,1977,1976,1975,1974,1973,1972,1971,1970,1969,1968,1967,1966,1965,1964,1963,1962,1961,1960', 'select' );
			</script>

			<script>
			$( '#wr_10' ).makeBox('월,1,2,3,4,5,6,7,8,9,10,11,12', 'select' );
			</script>

			<script>
			$( '#wr_3' ).makeBox('월,1,2,3,4,5,6,7,8,9,10,11,12', 'select' );
			</script>

			<script>
			$( '#wr_5' ).makeBox('일,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31', 'select' );
			</script>

			<script>
			$( '#wr_1' ).makeBox('선택,서울,부산,대구,인천,광주,대전,울산,세종,경기도,강원도,충청북도,충청남도,전라북도,전라남도,경상북도,경상남도,제주도', 'select' );
			</script>

			<script>
			$( '#wr_14' ).makeBox('년,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980,1979,1978,1977,1976,1975,1974,1973,1972,1971,1970,1969,1968,1967,1966,1965,1964,1963,1962,1961,1960', 'select' );
			</script>

			<script>
			$( '#wr_15' ).makeBox('월,1,2,3,4,5,6,7,8,9,10,11,12', 'select' );
			</script>

			<script>
			$( '#wr_16' ).makeBox('년,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980,1979,1978,1977,1976,1975,1974,1973,1972,1971,1970,1969,1968,1967,1966,1965,1964,1963,1962,1961,1960', 'select' );
			</script>

			<script>
			$( '#wr_17' ).makeBox('월,1,2,3,4,5,6,7,8,9,10,11,12', 'select' );
			</script>

			<script>
			$( '#wr_11' ).makeBox('년,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980,1979,1978,1977,1976,1975,1974,1973,1972,1971,1970,1969,1968,1967,1966,1965,1964,1963,1962,1961,1960', 'select' );
			</script>

			<script>
			$( '#wr_12' ).makeBox('월,1,2,3,4,5,6,7,8,9,10,11,12', 'select' );
			</script>

			<script>
			$( '#wr_20' ).makeBox('년,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980,1979,1978,1977,1976,1975,1974,1973,1972,1971,1970,1969,1968,1967,1966,1965,1964,1963,1962,1961,1960', 'select' );
			</script>

			<script>
			$( '#wr_21' ).makeBox('월,1,2,3,4,5,6,7,8,9,10,11,12', 'select' );
			</script>

			<script>
			$( '#wr_22' ).makeBox('년,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980,1979,1978,1977,1976,1975,1974,1973,1972,1971,1970,1969,1968,1967,1966,1965,1964,1963,1962,1961,1960', 'select' );
			</script>

			<script>
			$( '#wr_23' ).makeBox('월,1,2,3,4,5,6,7,8,9,10,11,12', 'select' );
			</script>



			<!-- 레이어 팝업 -->
			<div class="layer">
				<div class="bg"></div>
				<div id="layer2" class="pop-layer">
					<div class="pop-container">
						<div class="pop-conts">
							<div class="btn-r">
								<a href="#" class="cbtn"><img src="<?php echo G5_URL?>/img/xb.png"></a>
							</div>
							<!--내용시작-->
							<div class="modal-diploma" style="width:1050px; top:130px; left:207px; display:block;">
								<div class="relative-box">
									<div class="close" onclick="closeModal($('.modal-diploma'))"></div>
									<div class="w100 bg-modal">
										<div class="page-modal-bg">
											<div class="page-title"><span class="bold">개인정보 제공동의</span></div>
										</div>
										<div class="page-content-box">
											<div class="page-content" style="border-top:3px solid #1e439a; padding-top:20px;">
												<div class="row">
													<div class="" style="color:#777;">
													<span style="font-size:1.3em; font-weight:bold;">개인정보 수집 및 이용에 관한 사항</span><br><br>
													<b>생크림방문미술의 개인정보취급방침은 다음과 같은 내용을 담고 있습니다.</b><br>
													가. 수집하는 개인정보 항목 및 수집방법<br>

													나. 개인정보의 수집 및 이용목적	<br>

													다. 수집한 개인정보의 보유 및 이용기간<br>

													라. 동의를 거부할 권리가 있다는 사실과 동의 거부에 따른 불이익 내용	<br><br>

													<b>가.수집하는 개인정보 항목 및 수집방법 </b><br>
													생크림방문미술은 고객님의 온라인상담을 위해 홈페이지내 온라인 신청양식을 통해 아래의 개인정보를 수집하고 있습니다.<br>

													- 성명, 전화번호 <br>

													생크림방문미술은 다음과 같은 방법으로 개인정보를 수집합니다.<br>

													- 홈페이지 내 수강가이드(온라인상담신청, 수강료조회,내일배움카드제(계좌제)조회, 고용보험환급, 재직자국비과정조회, 시간표조회, 지점별위치조회, 위탁교육문의)를 통해 개인정보를 수집하고 있습니다.<br><br>

													<b>나.개인정보 수집 및 이용목적</b><br>
													생크림방문미술은 수집한 개인정보를 다음의 목적을 위해 활용합니다. <br>

													- 수강상담 및 등록문의에 대한 학원담당자들의 전화 및 이메일 상담<br><br>

													<b>다.수집한 개인정보의 보유 및 이용기간 </b><br>
													개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.<br><br>

													<b>라. 동의를 거부할 권리가 있다는 사실과 동의 거부에 따른 불이익 내용</b><br>
													이용자는 생크림방문미술 홈페이지에서 수집하는 개인정보에 대해 동의를 거부할 권리가 있으며 동의 거부 시에는 회원가입 및 온라인 상담 등의 홈페이지 서비스가 일부 제한 됩니다.
													</div>
												</div>
												<!--<div class="row">
													<div class="left">개요</div>
													<div class="right content-1">미용업무는 공중위생분야로서 국민의 건강과 직결되어 있는 중요한 분야로
													향후 국가의 산업구조가 제조업에서 서비스업 중심으로 전환되는 차원에서 수요가 증대되고 있다.
													분야별로 세분화 및 전문화 되고 있는 세계적인 추세에 맞추어 미용의 업무 중 헤어미용을 수행할 수 있는
													미용분야 전문인력을 양성하여 국민의 보건과 건강을 보호하기 위하여 자격제도를 제정.</div>
												</div>-->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--내용끝-->
						</div>
					</div>
				</div>
			</div>
			<!-- 레이어 팝업 end -->


			<div class="">
				<p style="line-height:3em; border-top:2px solid #1e439a; border-bottom:2px solid #1e439a; font-size:1.1em;">
					개인정보 제공동의
					<a href="#" onClick="layer_open('layer2');return false;"><span style="float:right; background:#1e439a; color:#fff; padding:0 20px;">약관보기</span></a>
				</p>
				<span style="float:right; padding-top:15px; font-size:1.1em;">
					<input type="checkbox" id="agree" required>
					<label for="agree">이에 동의 합니다.</label>
				</span>
			</div>
			<div style="clear:both"></div>


    <div class="btn_confirm">
        <input type="submit" value="신청하기" id="btn_submit" accesskey="s" class="btn_submit">
        <!--<a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel">취소</a>-->
    </div>
    </form>
	<div style="clear:both"></div><br><br><br>

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->


<script type="text/javascript">  
function layer_open(el){
        var temp = $('#' + el);
        var bg = temp.prev().hasClass('bg');    //dimmed 레이어를 감지하기 위한 boolean 변수
        if(bg){
            $('.layer').fadeIn();    //'bg' 클래스가 존재하면 레이어가 나타나고 배경은 dimmed 된다. 
        }else{
            temp.fadeIn();
        }
        // 화면의 중앙에 레이어를 띄운다.
        if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '-'+temp.outerHeight()/2+'px');
        else temp.css('top', '0px');
        if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '-'+temp.outerWidth()/2+'px');
        else temp.css('left', '0px');
        temp.find('a.cbtn').click(function(e){
            if(bg){
                $('.layer').fadeOut(); //'bg' 클래스가 존재하면 레이어를 사라지게 한다. 
            }else{
                temp.fadeOut();
            }
            e.preventDefault();
        });
        $('.layer .bg').click(function(e){    //배경을 클릭하면 레이어를 사라지게 하는 이벤트 핸들러
            $('.layer').fadeOut();
            e.preventDefault();
        });
    }              
</script>