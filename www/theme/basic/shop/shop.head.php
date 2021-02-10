<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if(G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<script src="https://kit.fontawesome.com/4a9f41abce.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
<script src="<?php echo G5_URL ?>/dist/js/bootstrap.js"></script>
<link rel="stylesheet" href="<?php echo G5_URL ?>/dist/css/bootstrap.css">

<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "s_55a0a62b263e";
// 체크아웃 whitelist가 있을 경우
wcs.checkoutWhitelist = ["seeto.kr", "www.seeto.kr"]; 
// 유입 추적 함수 호출
wcs.inflow("seeto.kr");
wcs_do();
</script> 
<style>
body{overflow-x:hidden; overflow-y:auto; }
a { font-family: 'NanumSquareRound',sans-serif;}
.top_info{height:30px; line-height:30px; background:#f9f9f9; width:100%; border-bottom:1px solid #efefef;}
.d_inner ul{list-style:none; margin:0; padding:0; float:right;}
.d_inner ul li{float:left; padding:0 5px; }
.d_inner ul li a{color:#000; font-family: 'NanumSquareRound',sans-serif;}

/*상단메뉴*/
.main_menu ul{width:100%; list-style:none;}
.main_menu ul li{float:left;color:white; font-weight:bold; font-size:1.1em; width:11.5%; text-align:center; border-right:1px solid #ddd;}
.main_menu ul li a {color:#000; font-family: 'NanumSquareRound',sans-serif; padding:0 10px 0 10px; font-size:1.2em;}
.main_menu ul li a{-moz-transition: all 0.5s;
		   -o-transition: all 0.5s;
		   -ms-transition: all 0.5s;
		   transition: all 0.5s;}
.main_menu ul li a:hover{color:#1e439a}

/*상단메뉴 fixed class*/
.fixed{
	position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    transition: all 0.3s ease;
	z-index:9999;
}
.topm{height:50px; line-height:25px; background:#fff; width:100%; border-top:1px solid #eee; border-bottom:1px solid #eee;}
.t_fixed_menu1{width:1170px; margin-left:40px; padding:4px; border:1px solid #eeeeee; position:absolute; background:#fff; top:206px; z-index:9999;}
.t_fixed_menu1 a {font-size:1.2em;}
.t_fixed_menu1 table td {text-align:center;}
.t_fixed_menu2{width:1150px; margin-left:40px; padding:4px; border:1px solid #eeeeee; position:absolute; background:#fff; top:50px; z-index:9999;}
</style>

<script>
$(window).scroll(function(){/*상단메뉴 스크롤 고정*/
	var sticky = $('.topm');
	var tm = $('#t_fix_menu');
	scroll = $(window).scrollTop();
	if(scroll >= 50){
		sticky.addClass('fixed');
		tm.addClass('t_fixed_menu2');
	}else{
		sticky.removeClass('fixed');
		tm.removeClass('t_fixed_menu2');
		tm.addClass('t_fixed_menu1');
	}
});
</script>



<!--<?php echo display_banner('상단'); ?>-->
<div class="top_info" style="border-bottom:1px solid #ccc">
	<div class="" style="float:left; padding-left:220px;">
		<a href="#" class="addfavorite">| &nbsp;&nbsp;<img src="<?php echo G5_URL?>/img/star.png" class="" width="12px;">&nbsp;즐겨찾기 추가&nbsp;&nbsp; |</a>
		<script type="text/javascript">
		$(function() {
			function bookmarksite(title,url){
				if (window.sidebar) // firefox
					window.sidebar.addPanel(title, url, "");
				else if(window.opera && window.print){ // opera
					var elem = document.createElement('a');
					elem.setAttribute('href',url);
					elem.setAttribute('title',title);
					elem.setAttribute('rel','sidebar');
					elem.click();
				}
				else if(document.all)// ie
					window.external.AddFavorite(url, title);
				else
					$('a.addfavorite').text('죄송합니다. 해당 브라우저는 자동즐겨찾기를 지원하지 않습니다. 수동으로 추가해주십시오.');
			}
			$('a.addfavorite').click(function() {
				bookmarksite('<?php echo $config['cf_title'];?>', 'http://<?php echo $g4['url'];?>');
				return false;
			});
		})
		</script>

	</div>
	<div class="d_inner" style="width:1200px; margin:0 auto; text-align:right; font-family: 'NanumSquareRound',sans-serif;">
		<ul>
			<?php if ($is_member) { ?>
			<?php if ($is_admin) {  ?>
			<li><a href="<?php echo G5_ADMIN_URL; ?>/shop_admin/"><b style="color:#1e439a;">관리자 </b>&nbsp;|&nbsp;</a></li>
			<?php }  ?>
			<li><a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">정보수정 </a>&nbsp;|&nbsp;</li>
			<li><a href="<?php echo G5_BBS_URL; ?>/logout.php?url=shop">로그아웃 </a>&nbsp;|&nbsp;</li>
			<?php } else { ?>
			<li><a href="<?php echo G5_BBS_URL; ?>/register.php">회원가입 </a>&nbsp;|&nbsp;</li>
			<li><a href="<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo $urlencode; ?>">로그인 </a>&nbsp;|&nbsp;</li>
			<?php } ?>
			<li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">마이페이지 </a>&nbsp;|&nbsp;</li>
			<li><a href="<?php echo G5_SHOP_URL; ?>/cart.php">장바구니 </a>&nbsp;|&nbsp;</li>
			<li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php">주문/배송조회 </a>&nbsp;|&nbsp;</li>
			<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=qa">고객센터</a></li>
		</ul>
	</div>
</div>
<!-- 상단 시작 { -->
<div id="hd">
    <div id="hd_wrapper" style="text-align:center;">
		<table width="100%" border="0">
			<tr style="height:120px;">
				<td width="33.3%"><?php echo display_banner('왼쪽'); ?><img src="<?php echo G5_URL?>/img/topcustom.png" class="img-responsive"></td>
				<td width="33.3%">
					<!--<a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_DATA_URL; ?>/common/logo_img" alt="<?php echo $config['cf_title']; ?>"></a>-->
					<a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_URL?>/img/logo.png" class="img-responsive"></a>
				</td>
				<td width="33.3%" align="right" style="padding-top:10px;">
					<div id="hd_sch">
						<h3>쇼핑몰 검색</h3>
						<form name="frmsearch1" action="<?php echo G5_SHOP_URL; ?>/search.php" onsubmit="return search_submit(this);" style="float:right">
						<label for="sch_str" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
						<!--<input type="text" name="q" value="<?php echo stripslashes(get_text(get_search_string($q))); ?>" id="sch_str" required style="border:1px solid #c00b02;">-->
						<input type="text" name="q" value="생각이 크는 그림!" id="sch_str" required style="border:3px solid #1e439a; height:35px; width:200px; padding-left:10px;" onfocus="this.value=''">
					
						<input type="image" src="<?php echo G5_URL?>/img/search_btn.jpg" value="검색" id="sch_submit" style="position:relative; right:4px; height:41px;">

						</form>
						<script>
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
					</div>
					<?php echo popular('theme/basic'); // 인기검색어?> 
				</td>
			</tr>
		</table>
    </div>
</div>


<div class="topm">
	<div id="wrapper">

	
		<div class="container">
			<div class="col-lg-12 dropdown">
					<div class="dropbtn col-lg-2 text-center" style="border-left:1px solid #eee; border-right:1px solid #eee">홈</div>
					<div class="dropbtn col-lg-2 text-center" style="border-right:1px solid #eee">타로상담</div>
					<div class="dropbtn col-lg-2 text-center" style="border-right:1px solid #eee">사주상담</div>
					<div class="dropbtn col-lg-2 text-center" style="border-right:1px solid #eee">신점상담</div>
					<div class="dropbtn col-lg-2 text-center" style="border-right:1px solid #eee">운영안내</div>
					<div class="dropbtn col-lg-2 text-center" style="border-right:1px solid #eee">공지사항</div>
					<div class="dropbtn col-lg-2 text-center" style="border-right:1px solid #eee">오시는길</div>
					<div style="clear:both"></div>
					<?/*
					<div class="col-lg-12 dropdown-content">
						<div class="dropbtn col-lg-2">
							<a href="<?php echo G5_THEME_SHOP_URL?>/sub1.php" class="text-center">생크림소개</a>
							<a href="<?php echo G5_THEME_SHOP_URL?>/sub1_2.php" class="text-center">오시는길</a>
						</div>
						<div class="dropbtn col-lg-2">
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=teahcer" class="text-center">교육문의</a>
						</div>
						<div class="dropbtn col-lg-2">
							<?if($is_admin){?>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=online" class="text-center">교육상담신청</a>
							<?}else{?>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=online" class="text-center">교육상담신청</a>
                            <?}?>
						</div>
						<div class="dropbtn col-lg-2">
							<?if($is_admin){?>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=online2" class="text-center">교사지원</a>
							<?}else{?>
							<a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online2" class="text-center">교사지원</a>
                            <?}?>
						</div>
						<div class="dropbtn col-lg-2">
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery" class="text-center">갤러리</a>
						</div>
						<div class="dropbtn col-lg-2">
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice" class="text-center">공지사항</a>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=news" class="text-center">생크림뉴스</a>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=event" class="text-center">이벤트</a>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=review" class="text-center">고객후기</a>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=data" class="text-center">자료실</a>
						</div>
						<div class="dropbtn col-lg-2">
							<a href="<?php echo G5_URL?>/shop/list.php?ca_id=20" class="text-center">타로상담</a>
						</div>
						<div class="dropbtn col-lg-2">
							<a href="<?php echo G5_URL?>/shop/list.php?ca_id=10" class="text-center">사주상담</a>
						</div>
						<div class="dropbtn col-lg-2">
							<a href="<?php echo G5_URL?>/shop/list.php?ca_id=30" class="text-center">신점상담</a>
						</div>
					</div>
					*/?>
				</div>
		</div>
	
	
	</div>
</div>

<!--좌측고정메뉴-->
<?include_once(G5_THEME_SHOP_PATH."/left_fixed_menu.php");?>
<!--좌측고정메뉴-->


<!--사은품 영역-->
<!--<div id="gif_img">
	<div style="position:fixed; bottom:160px; z-index:9999;"><img src="<?php echo G5_IMG_URL?>/gift.jpg"></div>
		<div style="position:fixed; bottom:310px; left:120px; z-index:9999;">
			<span style="width:30px; height:28px; display:inline-block; font-size:2em; color:#ddd; border:1px solid #ddd; text-align:center; cursor:pointer; background:#fff" id="img_hidden">X</span>
		</div>
	</div>
</div>
<script>

$(document).ready(function() {//사은품 hide 
	$('#img_hidden').on('click', function(e) { 
		$("#gif_img").hide();
	}); 
}); 
</script>-->
<!--사은품 영역-->


<!--우측고정메뉴--->
<?//include_once(G5_THEME_SHOP_PATH."/right_fixed_menu.php");?>
<!--우측고정메뉴--->

<div style="padding:0px; text-align:center;">
	<a style="text-align:center; color:#aaa; cursor:pointer; text-decoration:none" id="top_btn">
		 <img src="<?php echo G5_URL?>/img/top.png" class="img-responsive">
	</a>
</div>

<!--게시판 및 상품 카테고리별 베너출력
<div id="wrapper">
    <div id="container">
		<?if($bo_table == 'gallery'){//lookbook 베너 출력?>
		<div style="margin:30px 0;">
			<?php echo display_banner('lookbook');?>
		</div>
		<?}else if($bo_table == 'event'){//이벤트 베너 출력?>
		<div style="margin:30px 0;">
			<?php echo display_banner('event');?>
		</div>
		<?}else if($bo_table == 'review'){//리뷰 베너 출력?>
		<div style="margin:30px 0;">
			<?php echo display_banner('reviews');?>
		</div>	
		<?}?>
		<?if($_GET['type'] == '3'){//new상품 베너 출력?>
		<div style="margin:30px 0;">
			<?php echo display_banner('new');?>
		</div>
		<?}else if($_GET['type'] == '5'){//sale상품 베너 출력?>
		<div style="margin:30px 0;">
			<?php echo display_banner('sale');?>
		</div>
		<?}?>
	</div>
</div>


<!--
<div id="wrapper">
    <?php// include(G5_SHOP_SKIN_PATH.'/boxtodayview.skin.php'); // 오늘 본 상품 ?>
    <div id="container"> -->
	
        