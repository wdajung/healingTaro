<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<style>
.privacyTxt h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    font-weight: ;
    color: #555;
}
.privacyTxt p{
	line-height:1.7em;
	font-size:1em;
}
.privacyAgree u {
    font-weight: bold;
}
.container:after {
    content: "";
    display: table;
    clear: both;
}
.privacyTxt {
    height: 90px;
    overflow-y: scroll;
    border: 1px solid #ddd;
    padding: 20px;
    line-height: 1.5;
    background-color: #fff;
    font-family: 'NanumSquareRound',sans-serif;
}
.privacyAgree {
    text-align: right;
    padding-top: 10px;
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

input[type='checkbox'] {
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
input[type='checkbox']:checked:after {
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

<div id="wrapper">
	<div id="container">

<section id="bo_w">
    <!--<h2 id="container_title"><?php echo $g5['title'] ?></h2>-->
	<p style="text-align:center; font-size:3em; padding:50px 0; font-family: 'NanumSquareRound',sans-serif;"><?php echo $g5['title'] ?></p>

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
        <p style="color:#1e439a; font-size:1.5em; line-height:2em;"><b>생크림방문미술 지역선택</b></p>
		<table style="border-top:2px solid #1e439a;">
        <tbody>
			<tr>
				<th width="25%">시(도)</th>
				<td width="25%"><input type="text" name="wr_9" id="wr_9" value="<?php echo $wr_9 ?>"></td>
				<th width="25%">구(군)</th>
				<td width="25%"><input type="text" name="wr_10" value="" id="wr_10" required class="frm_input required" size="20" maxlength="20" style="height:2.2em; font-size:1.2em; padding-left:10px;"></td>
			</tr>
			<tr>
				<th scope="row"><label for="wr_name">이름<strong class="sound_only">필수</strong></label></th>
				<td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="20" maxlength="20" style="height:2.2em; font-size:1.2em; padding-left:10px;"></td>
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
			<tr>
				<th width="25%">연령(학년)</th>
				<td width="25%"><input type="text" name="wr_8" id="wr_8" value="<?php echo $wr_8 ?>"></td>
				<th width="25%">희망상담방법</th>
				<td width="25%"><input type="text" name="wr_4" id="wr_4" value="<?php echo $wr_4 ?>"></td>
			</tr>
		</tbody>
		</table>
	</div>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <tbody>
        <!--
		<?php if ($is_name) { ?>
        <tr>
            <th scope="row"><label for="wr_name">이름<strong class="sound_only">필수</strong></label></th>
            <td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="10" maxlength="20"></td>
        </tr>
        <?php } ?>

        <?php if ($is_password) { ?>
        <tr>
            <th scope="row"><label for="wr_password">비밀번호<strong class="sound_only">필수</strong></label></th>
            <td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" maxlength="20"></td>
        </tr>
        <?php } ?>

        <?php if ($is_email) { ?>
        <tr>
            <th scope="row"><label for="wr_email">이메일</label></th>
            <td><input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" size="50" maxlength="100"></td>
        </tr>
        <?php } ?>

        <?php if ($is_homepage) { ?>
        <tr>
            <th scope="row"><label for="wr_homepage">홈페이지</label></th>
            <td><input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input" size="50"></td>
        </tr>
        <?php } ?>
		-->


		<input type="hidden" name="wr_content" id="wr_content" value="필수입력">
        <!--
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
            <th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
            <td>
                <div id="autosave_wrapper">
                    <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255">
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
                    <?php } ?>
                </div>
            </td>
        </tr>

        <!--
		<tr>
            <th scope="row"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
            <td class="wr_content">
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 
                <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                <?php } ?>
                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 
                <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                <?php } ?>
            </td>
        </tr>

		
        <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
        <tr>
            <th scope="row"><label for="wr_link<?php echo $i ?>">링크 #<?php echo $i ?></label></th>
            <td><input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input" size="50"></td>
        </tr>
        <?php } ?>-->

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

        <?php if ($is_guest) { //자동등록방지  ?>
        <tr>
            <th scope="row">자동등록방지</th>
            <td>
                <?php echo $captcha_html ?>
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
			$( '#wr_4' ).makeBox( '전화상담,방문상담', 'radio' );
			</script>

			<script>
			$( '#wr_8' ).makeBox('학년선택,6세,7세,1학년,2학년,3학년,4학년,5학년,6학년', 'select' );
			</script>

			<script>
			$( '#wr_9' ).makeBox('선택,서울,부산,대구,인천,광주,대전,울산,세종,경기도,강원도,충청북도,충청남도,전라북도,전라남도,경상북도,경상남도,제주도', 'select' );
			</script>

			<script>
			$( '#wr_12' ).makeBox('일,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31', 'select' );
			</script>

			<script>
			$( '#wr_13' ).makeBox('선택,서울,부산,대구,인천,광주,대전,울산,세종,경기도,강원도,충청북도,충청남도,전라북도,전라남도,경상북도,경상남도,제주도', 'select' );
			</script>

			<script>
			$( '#wr_14' ).makeBox('년,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980', 'select' );
			</script>

			<script>
			$( '#wr_15' ).makeBox('월,1,2,3,4,5,6,7,8,9,10,11,12', 'select' );
			</script>

			<script>
			$( '#wr_16' ).makeBox('년,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980', 'select' );
			</script>


	<!-- 개인정보취급방침 -->
				<div class="privacyTxt">
					<h5 style="font-weight:bold; font-family: 'NanumSquareRound',sans-serif; font-size:1.3em;">개인정보 수집 및 이용에 관한 사항</h5>

					<h6 style="font-weight:bold; font-family: 'NanumSquareRound',sans-serif;">생크림방문미술의 개인정보취급방침은 다음과 같은 내용을 담고 있습니다.</h6>
					<p>가. 수집하는 개인정보 항목 및 수집방법</p>
					<p>나. 개인정보의 수집 및 이용목적</p>
					<p>다. 수집한 개인정보의 보유 및 이용기간</p>
					<p>라. 동의를 거부할 권리가 있다는 사실과 동의 거부에 따른 불이익 내용</p><br>

					<h6 style="font-weight:bold; font-family: 'NanumSquareRound',sans-serif;">가.수집하는 개인정보 항목 및 수집방법</h6>
					<p>생크림방문미술은 고객님의 온라인상담을 위해 홈페이지내 온라인 신청양식을 통해 아래의 개인정보를 수집하고 있습니다.</p>
					<p>- 성명, 전화번호</p>

					<p>생크림방문미술은 다음과 같은 방법으로 개인정보를 수집합니다.</p>
					<p>- 홈페이지 내 수강가이드(온라인상담신청, 수강료조회,내일배움카드제(계좌제)조회, 고용보험환급, 재직자국비과정조회, 시간표조회, 지점별위치조회, 위탁교육문의)를 통해 개인정보를 수집하고 잇습니다.</p><br>

					<h6 style="font-weight:bold; font-family: 'NanumSquareRound',sans-serif;">나.개인정보 수집 및 이용목적</h6>
					<p>생크림방문미술은 수집한 개인정보를 다음의 목적을 위해 활용합니다.</p>
					<p>- 수강상담 및 등록문의에 대한 학원담당자들의 전화 및 이메일 상담 </p><br>

					<h6 style="font-weight:bold; font-family: 'NanumSquareRound',sans-serif;">다.수집한 개인정보의 보유 및 이용기간 </h6>
					<p>개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.</p><br>

					<h6 style="font-weight:bold; font-family: 'NanumSquareRound',sans-serif;">라. 동의를 거부할 권리가 있다는 사실과 동의 거부에 따른 불이익 내용</h6>
					<p>이용자는 생크림방문미술 홈페이지에서 수집하는 개인정보에 대해 동의를 거부할 권리가 있으며 동의 거부 시에는 회원가입 및 온라인 상담 등의 홈페이지 서비스가 일부 제한 됩니다.</p>
				</div>

				<div class="privacyAgree">
					<input type="checkbox" id="agree" required>
					<label for="agree">이에 동의 합니다.</label>
				</div><br><br>



    <div class="btn_confirm">
        <input type="submit" value="상담신청하기" id="btn_submit" accesskey="s" class="btn_submit">
        <!--<a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel">취소</a> -->
    </div><br><Br>
    </form>

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

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->