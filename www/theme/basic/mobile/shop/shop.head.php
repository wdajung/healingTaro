<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "s_55a0a62b263e";
// 체크아웃 whitelist가 있을 경우
wcs.checkoutWhitelist = ["seeto.kr", "www.seeto.kr"]; 
// 유입 추적 함수 호출
wcs.inflow("seeto.kr");
wcs_do();
</script>


<header id="hd">
    <?php if ((!$bo_table || $w == 's' ) && defined('_INDEX_')) { ?><h1><?php echo $config['cf_title'] ?></h1><?php } ?>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php if(defined('_INDEX_')) { // index에서만 실행
        include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>
    <ul id="hd_tnb">
        <?php if ($is_member) { ?>
        <?php if ($is_admin) {  ?>
        <li><a href="<?php echo G5_ADMIN_URL ?>/shop_admin/"><b>관리자</b></a></li>
        <?php } else { ?>
        <li><a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">정보수정</a></li>
        <?php } ?>
        <li><a href="<?php echo G5_BBS_URL; ?>/logout.php?url=shop">LOGOUT</a></li>
        <?php } else { ?>
        <li><a href="<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo $urlencode; ?>">LOGIN</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/register.php" id="snb_join">JOIN</a></li>
        <?php } ?>
        <li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">MY PAGE</a></li>
        <li><a href="<?php echo G5_SHOP_URL; ?>/cart.php" class="tnb_cart"><span></span>CART</a></li>
    </ul>

	<!--
	<ul id="hd_tnb">
		<li>
			<a href="<?php echo G5_SHOP_URL?>/search.php?qsort=&qorder=&qcaid=&qname=1&qexplan=1&qid=1&qfrom=1&qto=100000&q=">
				10만원 이하
			</a>
		</li>
		<li>
			<a href="<?php echo G5_SHOP_URL?>/search.php?qsort=&qorder=&qcaid=&qname=1&qexplan=1&qid=1&qfrom=100000&qto=199999&q=">
				10만원대
			</a>
		</li>
		<li>
			<a href="<?php echo G5_SHOP_URL?>/search.php?qsort=&qorder=&qcaid=&qname=1&qexplan=1&qid=1&qfrom=200000&qto=299999&q=">
				20만원대
			</a>
		</li>
		<li>
			<a href="<?php echo G5_SHOP_URL?>/search.php?qsort=&qorder=&qcaid=&qname=1&qexplan=1&qid=1&qfrom=300000&qto=399999&q=">
				30만원대
			</a>
		</li>
	</ul>
	<ul id="hd_tnb">
		<li>
			<a href="<?php echo G5_SHOP_URL?>/search.php?qsort=&qorder=&qcaid=&qname=1&qexplan=1&qid=1&qfrom=&qto=&q=&w_it=남성선글라스">
				남성선글라스
			</a>
		</li>
		<li>
			<a href="<?php echo G5_SHOP_URL?>/search.php?qsort=&qorder=&qcaid=&qname=1&qexplan=1&qid=1&qfrom=&qto=&q=&w_it=여성선글라스">
				여성선글라스
			</a>
		</li>
		<li>
			<a href="<?php echo G5_SHOP_URL?>/search.php?qsort=&qorder=&qcaid=&qname=1&qexplan=1&qid=1&qfrom=&qto=&q=&w_it=연예인착용">
				연예인착용
			</a>
		</li>
		<li>
			<a href="<?php echo G5_SHOP_URL?>/search.php?qsort=&qorder=&qcaid=&qname=1&qexplan=1&qid=1&qfrom=&qto=&q=&w_it=스포츠">
				스포츠
			</a>
		</li>
	</ul>-->

    <!--<div id="logo"><a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_DATA_URL; ?>/common/mobile_logo_img" alt="<?php echo $config['cf_title']; ?> 메인"></a></div>-->
	<div id="logo">
		<!--<a href="<?php echo G5_SHOP_URL?>"><img src="<?php echo G5_IMG_URL?>/m_logo.png" width="35%"></a>-->
		<a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_URL?>/img/logo.png" width="20%"></a>
	</div>

    <?php include_once(G5_THEME_MSHOP_PATH.'/category.php'); // 분류 ?>
	

    <!--<button type="button" id="hd_sch_open">검색<span class="sound_only"> 열기</span></button>-->

    <form name="frmsearch1" action="<?php echo G5_SHOP_URL; ?>/search.php" onsubmit="return search_submit(this);">
    <aside id="hd_sch">
        <div class="sch_inner">
            <h2>상품 검색</h2>
            <label for="sch_str" class="sound_only">상품명<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="q" value="<?php echo stripslashes(get_text(get_search_string($q))); ?>" id="sch_str" required class="frm_input">
            <input type="submit" value="검색" class="btn_submit">
            <button type="button" class="pop_close"><span class="sound_only">검색 </span>닫기</button>
        </div>
    </aside>
    </form>
    <script>
        $(function (){
        var $hd_sch = $("#hd_sch");
        $("#hd_sch_open").click(function(){
            $hd_sch.css("display","block");
        });
        $("#hd_sch .pop_close").click(function(){
            $hd_sch.css("display","none");
        });
    });

    function search_submit(f) {
        if (f.q.value.length < 2) {
            alert("검색어는 두글자 이상 입력하십시오.");
            f.q.select();
            f.q.focus();
            return false;
        }

        return true;
    }

    </script>

    <!--<ul id="hd_mb">
        <li><a href="<?php echo G5_BBS_URL; ?>/faq.php">FAQ</a></li>
        <li><a href="<?php echo G5_BBS_URL; ?>/qalist.php">1:1문의</a></li>
        <?php
        if(G5_COMMUNITY_USE) {
            $com_href = G5_URL;
            $com_name = '커뮤니티';
        } else {
            if(!preg_match('#'.G5_SHOP_DIR.'/#', $_SERVER['SCRIPT_NAME'])) {
                $com_href = G5_SHOP_URL;
                $com_name = '쇼핑몰';
            }
        }

        if($com_href && $com_name) {
        ?>
        <li><a href="<?php echo $com_href; ?>/"><?php echo $com_name; ?></a></li>
        <?php } ?>
        <li><a href="<?php echo G5_SHOP_URL; ?>/personalpay.php">개인결제</a></li>
        <?php if(!$com_href || !$com_name) { ?>
        <li><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5">세일상품</a></li>
        <?php } ?>
    </ul>-->
</header>  



<style>
/*상단메뉴*/
.main_menu ul{width:100%; list-style:none; height:35px; line-height:35px;}
.main_menu ul li{float:left;color:white; font-weight:bold; width:19.7%; text-align:center; border-right:1px solid #ddd;}
.main_menu ul li a {color:#000; font-family: 'NanumSquareRound',sans-serif; padding:0 10px 0 10px; font-size:1em;}
.main_menu ul li a{-moz-transition: all 0.5s;
		   -o-transition: all 0.5s;
		   -ms-transition: all 0.5s;
		   transition: all 0.5s;}
.main_menu ul li a:hover{color:#1e439a}
</style>
<div class="container">
	<div class="main_menu" style="border-top:1px solid #eee; border-bottom:1px solid #eee;">
		<ul>
			<li><a href="<?php echo G5_URL?>/sub1.php">방문미술</a></li>
			<li><a href="<?php echo G5_URL?>/sub2.php">프로그램</a></li>
			<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=teahcer">교육문의</a></li>
			
			<?if($is_admin){?>
			<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=online">교육상담</a></li>
			<?}else{?>
			<li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online">교육상담</a></li>
			<?}?>

			<?if($is_admin){?>
			<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=online2">교사지원</a></li>
			<?}else{?>
			<li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online2">교사지원</a></li>
			<?}?>
		</ul>
	</div>
</div>
<div style="clear:both;"></div>


<div id="container">
    <!--<?php if ((!$bo_table || $w == 's' ) && !defined('_INDEX_')) { ?><h1 id="container_title"><?php echo $g5['title'] ?></h1><?php } ?>	-->
