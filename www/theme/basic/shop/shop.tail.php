<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
    return;
}

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
<div style="clear:both"></div>

	<!--instra board
	<div style="padding:20px 0;">
		<div id="wrapper">
			<div id="container">
				<div style="text-align:center;vertical-align:bottom;">
					<img src="<?php echo G5_IMG_URL?>/insta_title.png" max-width="100%">
					<span style="line-height:60px;position:absolute;right:0;"><font color="#999999">Instagram ID : creamart &nbsp;</font>
					<?if($is_admin){?>
					<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=insta" style=" color:#c9c9c9;">+ 관리</a></span>
					<?}?>
					<!--
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td width="50%" align="center"><img src="<?php echo G5_IMG_URL?>/insta_title.png" max-width="100%"></td>
							<td width="50%" align="right">
								<font color="#999999">Instagram ID : seeto8578</font>
								<?if($is_admin){?>
								<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=insta" class="radius_btn" style=" color:#c9c9c9;">+ 관리</a>
								<?}?>
							</td>
						</tr>
					</table>
				</div>
				<div><?=latest("theme/gallery_latest3","insta",12,15);?></div>
			</div>
		</div>
	</div>-->
</div>
<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
</div>
<script language="JavaScript">
	function go_check()
	{
		var status  = "width=500 height=450 menubar=no,scrollbars=no,resizable=no,status=no";
		var obj     = window.open('', 'kcp_pop', status);

		document.shop_check.method = "post";
		document.shop_check.target = "kcp_pop";
		document.shop_check.action = "http://admin.kcp.co.kr/Modules/escrow/kcp_pop.jsp";

		document.shop_check.submit();
	}
</script>
<script> 
$(document).ready(function() {//즐겨찾기 
    $('#favorite').on('click', function(e) { 
        var bookmarkURL = window.location.href; //즐겨찾기될 url 주소 
        var bookmarkTitle = document.title; //즐겨찾기될 제목(타이틀) 
        var triggerDefault = false; 

        if (window.sidebar && window.sidebar.addPanel) { 
            window.sidebar.addPanel(bookmarkTitle, bookmarkURL, ''); 
        } else if ((window.sidebar && (navigator.userAgent.toLowerCase().indexOf('firefox') > -1)) || (window.opera && window.print)) { 
            var $this = $(this); 
            $this.attr('href', bookmarkURL); 
            $this.attr('title', bookmarkTitle); 
            $this.attr('rel', 'sidebar'); 
            $this.off(e); 
            triggerDefault = true; 
        } else if (window.external && ('AddFavorite' in window.external)) { 
            window.external.AddFavorite(bookmarkURL, bookmarkTitle); 
        } else { 
            alert((navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Cmd' : 'Ctrl') + '+D 키를 눌러 즐겨찾기에 등록하실 수 있습니다.'); 
        } 
        return triggerDefault; 
    }); 
}); 
</script>
<script>
function on_element(t_val,e_val){//mouseover 이미지on
	t_val.src=e_val;
	return false;
}

function off_element(t_val,e_val){//mouseout 이미지off
	t_val.src=e_val;
	return false;
}
</script>

<div id="ft" style="font-family: 'NanumSquareRound',sans-serif; margin-top:60px;">
	 <div class="ft_wr">
        <ul id="ft_link">
            <!--<li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company"><b>ABOUT</b></a></li>-->
			<li><a href="<?php echo G5_THEME_SHOP_URL?>/sub1.php"><b>ABOUT</b></a></li>
            <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision"><b>AGREEMENT</b></a></li>
            <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy"><b>PRIVACY POLICY</b></a></li>
            <li><a href="<?php echo G5_BBS_URL; ?>/faq.php"><b>CUSTOMER CENTER</b></a></li>
        </ul>
        <div id="ft_if" style="line-height:2em;"> 
            <h2><?php echo $config['cf_title']; ?> 정보</h2>
            <b><span style="color:#000; font-size:1.2em;"><?php echo $default['de_admin_company_name']; ?></span></b> <br>
            <span><b>주소:</b> <?php echo $default['de_admin_company_addr']; ?></span><br>
			<span><b>생크림 방문 미술 교사 교육장:</b> 남양주시 다산순환로420 성산플레이스3 403호</span><br>
            <span><b>사업자 등록번호:</b> <?php echo $default['de_admin_company_saupja_no']; ?></span> |
            <span><b>대표:</b> <?php echo $default['de_admin_company_owner']; ?></span> |
            <span><b>전화:</b> <?php echo $default['de_admin_company_tel']; ?></span>
            <!--
			<span><b>팩스:</b> <?php echo $default['de_admin_company_fax']; ?></span><br>
			<span>
				<b>이메일</b><?php echo $default['de_admin_info_email']?>
				
			</span>-->

			<br>
            <!-- <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span><br> 
            <span><b>통신판매업신고번호:</b> <?php echo $default['de_admin_tongsin_no']; ?></span> |
            <span><b>개인정보관리책임자:</b> <?php echo $default['de_admin_info_name']; ?></span><br>
			<span><b>반품교환:</b> <?php echo $default['de_admin_company_addr']; ?> / CJ대한통운</span><br>
			<span><b><a href="http://www.ftc.go.kr/info/bizinfo/communicationView.jsp?apv_perm_no=2017309015230200006&area1=&area2=&currpage=1&searchKey=04&searchVal=6033507143&stdate=&enddate" target="_blank">공정거래위원회 사업자정보조회</a></b></span>
			<br><br>
			<span><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa" style="color:#333;background:#eee;padding:5px;border-radius:5px;"><b>반품/교환/환불</b> 신청게시판 </a></span><br>-->
			
            <?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?><br>
            Copyright &copy; 2019 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.
        </div>
        <div id="ft_cs" style="padding:0; text-align:right;">
			<a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_URL?>/img/logof.png" class="img-responsive"></a>
			<!--
			<div style="border-top:2px solid #aaa;border-bottom:2px solid #aaa;margin-bottom:10px">
				<img src="<?php echo G5_URL?>/img/footer_img0.png">
			</div>
			<form name="shop_check" method="post" action="http://admin.kcp.co.kr/Modules/escrow/kcp_pop.jsp">
				<input type="hidden" name="site_cd" value="SR5BA">
				<table border="0" cellspacing="0" cellpadding="0">
				
				<tr>
					<td><img src="<?php echo G5_URL?>/img/es_foot.gif" width="290" height="92" border="0" usemap="#Map"></td>
				</tr>
				</table>
				<map name="Map" id="Map">
				<area shape="rect" coords="5,62,74,83" href="javascript:go_check()" alt="가입사실확인"  onfocus="this.blur()"/>
				</map>
			</form>
            <!--<div>
                <?php
                $save_file = G5_DATA_PATH.'/cache/theme/macaroon/footerinfo.php';
                if(is_file($save_file))
                    include($save_file);
                ?>
                <strong class="cs_tel"><?php echo get_text($footerinfo['tel']); ?></strong>
                <p class="cs_info"><?php echo get_text($footerinfo['etc'], 1); ?></p>
            </div>-->
        </div>
	</div>
	<div style="clear:both"></div>    
</div>
<!--
<div style="text-align:center;">
	<img src="<?php echo G5_URL?>/img/hu.jpg">
</div>
<div style="padding:10px 0;text-align:center;background:#f7f7f7;">
	<img src="<?php echo G5_URL?>/img/footer_img1.png">
	<img src="<?php echo G5_URL?>/img/footer_img2.png">
	<img src="<?php echo G5_URL?>/img/footer_img3.png">
	<img src="<?php echo G5_URL?>/img/footer_img4.png">
	<img src="<?php echo G5_URL?>/img/footer_img5.png">
</div> -->
<div id="ft" style="display:none">
    <div>
        <a href="<?php echo G5_SHOP_URL; ?>/" id="ft_logo"><img src="<?php echo G5_DATA_URL; ?>/common/logo_img2" alt="처음으로"></a>
        <ul>
            <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a></li>
            <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a></li>
            <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a></li>
        </ul>
        <p>
            <span><b>회사명</b> <?php echo $default['de_admin_company_name']; ?></span>
            <span><b>주소</b> <?php echo $default['de_admin_company_addr']; ?></span><br>
            <span><b>사업자 등록번호</b> <?php echo $default['de_admin_company_saupja_no']; ?></span>
            <span><b>대표</b> <?php echo $default['de_admin_company_owner']; ?></span>
            <span><b>전화</b> <?php echo $default['de_admin_company_tel']; ?></span>
            <span><b>팩스</b> <?php echo $default['de_admin_company_fax']; ?></span><br>
            <!-- <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span><br> -->
			<span><b>이메일</b><?php echo $default['de_admin_info_email']?></span>
            <span><b>통신판매업신고번호</b> <?php echo $default['de_admin_tongsin_no']; ?></span>
            <span><b>개인정보 보호책임자</b> <?php echo $default['de_admin_info_name']; ?></span>

            <?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?><br>
            Copyright &copy; 2013-2017 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.
        </p>
    </div>
</div>

<script>
/*상품리스트 mouseover out 이미지 변경  /www/lib/shop.lib 연결됨*/
/*
function on_element(t_val,e_val){//mouseover 이미지on
	t_val.src=e_val;
	return false;
}

function off_element(t_val,e_val){//mouseout 이미지off
	t_val.src=e_val;
	return false;
}
*/
</script>
<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
<script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
</script>
<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>
<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
