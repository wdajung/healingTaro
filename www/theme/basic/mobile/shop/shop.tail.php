<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
<div style="width:100%; border-bottom:1px solid #eeeeee;">
	<table width="100%" cellpadding="5" cellspacing="5">
		<!--<tr>
			<td align="center" width="25%"><a href="<?php echo G5_SHOP_URL?>/cart.php"><img src="<?php echo G5_IMG_URL?>/m_quick_01.png" width="100%"></a></td>
			<td align="center" width="25%"><a href="<?php echo G5_SHOP_URL?>/mypage.php"><img src="<?php echo G5_IMG_URL?>/m_quick_02.png" width="100%"></a></td>
			<td align="center" width="25%"><a href="<?php echo G5_SHOP_URL?>/orderinquiry.php"><img src="<?php echo G5_IMG_URL?>/m_quick_03.png" width="100%"></a></td>
			<td align="center" width="25%"><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=qa&sca=방문예약"><img src="<?php echo G5_IMG_URL?>/m_quick_04.png" width="100%"></a></td>
		</tr>-->
		<tr>
			<td align="center" width="25%"><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=qa"><img src="<?php echo G5_IMG_URL?>/m_quick_05.png" width="100%"></a></td>
			<td align="center" width="25%"><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=review"><img src="<?php echo G5_IMG_URL?>/m_quick_06.png" width="100%"></a></td>
			<td align="center" width="25%"><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=event"><img src="<?php echo G5_IMG_URL?>/m_quick_07.png" width="100%"></a></td>
			<td align="center" width="25%"><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice"><img src="<?php echo G5_IMG_URL?>/m_quick_08.png" width="100%"></a></td>
		</tr>
	</table>
</div>
</div><!-- container End -->

<script>
function re(){
	alert('준비중입니다.');
	return false;
}
</script>


<!--
<div style="width:100%; margin:0 auto;">
	<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td width="33.333%" align="center" style="border:1px solid #eeeeee; padding-top:5px; padding-bottom:5px;"><a href="<?php echo G5_THEME_SHOP_URL?>/sub1.php">방문미술소개</a></td>
			<td width="33.333%" align="center" style="border:1px solid #eeeeee; padding-top:5px; padding-bottom:5px;" onclick="location.href='<?php echo G5_BBS_URL?>/content.php?co_id=provision'">서비스이용약관</td>
			<td width="33.333%" align="center" style="border:1px solid #eeeeee; padding-top:5px; padding-bottom:5px;" onclick="location.href='<?php echo G5_BBS_URL?>/content.php?co_id=privacy'">개인정보처리방침</td>
		</tr>
	</table>
</div>-->
<div style="clear:both;"></div>

<div id="ft" style="background:#f9f9f9;">
    <!--<h2><?php echo $config['cf_title']; ?> 정보</h2>-->
    <!--<div id="ft_logo"><a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_IMG_URL; ?>/mobile_logo.png"></a></div>	-->
    <p>
        <!--<span><b>회사명</b> <?php echo $default['de_admin_company_name']; ?></span>-->
        <span><b>주소</b> <?php echo $default['de_admin_company_addr']; ?></span><br>
        <span><b>사업자 등록번호</b> <?php echo $default['de_admin_company_saupja_no']; ?></span><br>
        <span><b>대표</b> <?php echo $default['de_admin_company_owner']; ?></span>&nbsp;
        <span><b>전화</b> <?php echo $default['de_admin_company_tel']; ?></span><br>
        <!--<span><b>팩스</b> <?php echo $default['de_admin_company_fax']; ?></span><br>
         <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span><br>
        <span><b>통신판매업신고번호</b> <?php echo $default['de_admin_tongsin_no']; ?></span><br>
        <span><b>개인정보 보호책임자</b> <?php echo $default['de_admin_info_name']; ?></span>

        <?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?><br>  -->
        Copyright &copy; 2019 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.
    </p>
    <a href="#" id="ft_to_top" style="background:#1e439a; color:#fff;">상단으로</a>
</div>

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
