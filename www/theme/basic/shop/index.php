<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

define("_INDEX_", TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>


<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

	</div>
</div>


<style>
.radius_btn{border:1px solid #c9c9c9; padding:4px 7px 4px 8px; border-radius:10px;float:right;font-size:9pt}
.main_title {font-family: 'NanumSquareRound',sans-serif; font-size:2.0em; color:#444;font-weight:900;margin-bottom:15px;}
.main_title2 {font-family: 'NanumSquareRound',sans-serif; font-size:2.7em; color:#444;font-weight:700;margin-bottom:15px;}
.main_title3 {font-family: 'NanumSquareRound',sans-serif; font-size:2em; font-weight:700;}

.brand_list{padding: 10px;
background: #eee;
border-right: 1px solid #ccc;
border-left: 1px solid #ccc;
border-bottom: 1px solid #ccc;}
.main_banner {padding:20px 0px 60px 0px}

.main_effect {opacity:1}
.main_effect:hover {opacity:0.8;
-webkit-transition: all 0.5s ease;
-moz-transition: all 0.5s ease;
-o-transition: all 0.5s ease;
-ms-transition: all 0.5s ease;
transition: all 0.5s ease;}
</style>

<!-- 메인이미지 시작 { -->
<div style="z-index:9990">
<?php echo display_banner('메인', 'mainbanner.20.skin.php'); ?>
</div>
<!-- } 메인이미지 끝 -->


<!--bestreview setion-->
	<!--bestrevice.html-->
<!--bestreview setion-->

<div style="clear:both;"></div>




<div style="padding:20px 40px 20px 40px; background:#f2f2f2;">
	<div id="wrapper">
		<div id="container">
		<div style="width:100%">
				<table width="100%" cellpadding="5" cellspacing="5">
					<tr>
						<td width="30%" valign="top">
							<div style="background: #f27800; padding:10px 20px;">								
								<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice" style="color:#fff"><p class="main_title3">공지사항 &nbsp;&nbsp; +</p></a>								
							</div>
							<div style="background:#fff;"><?=latest("theme/notice_latest","notice",4,17);?></div>
						</td>
						<td width="1%"></td>
						<td width="39%" valign="top">
							<a href="<?php echo G5_THEME_SHOP_URL?>/sub1.php"><img src="<?php echo G5_URL?>/img/main02.jpg" width="100%" class="main_effect"></a>
							<div style="display:none;">
								<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=review" style="color:#444"><p class="main_title">REVIEW <span style="font-size:0.5em;color:#aaa;font-weight:normal">고객후기</span></p></a>	
							</div>
							<div style="display:none;"><?=latest("theme/review_latest","review",3,10);?></div>					
						</td>
						<td width="1%"></td>
						<td width="29%" valign="top">
							<a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online2"><img src="<?php echo G5_URL?>/img/main01.png" class="main_effect"></a>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=news"><img src="<?php echo G5_URL?>/img/main02.png" class="main_effect"></a>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=teahcer"><img src="<?php echo G5_URL?>/img/main03.png" class="main_effect"></a>
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=review"><img src="<?php echo G5_URL?>/img/main04.png" class="main_effect"></a>
							<!--
							<div>
								<p class="main_title" style="color:#444">MOV <span style="font-size:0.5em;color:#aaa;font-weight:normal">영상</span></p>
							</div>
							<div>
								<iframe width="320" height="184" src="http://www.youtube-loop.com/embed/lqJr84w9K44" frameborder="0" allowfullscreen></iframe>
							</div>-->					
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div style="clear:both;"></div>


<section>
<div id="wrapper">
    <div id="container">
		<div class="main_banner">
			<table width="100%" style="margin:0 auto;" cellpadding="10">
				<tr>
					<td><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=review"><img src="<?php echo G5_URL?>/img/event01.png" class="main_effect"></a></td>
					<td><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=teahcer"><img src="<?php echo G5_URL?>/img/event02.png" class="main_effect"></a></td>
					<td><a href="<?php echo G5_THEME_SHOP_URL?>/sub2.php"><img src="<?php echo G5_URL?>/img/event03.png" class="main_effect"></a></td>
				</tr>
			</table>
		</div>

		<div style="text-align:center;">
			<p class="main_title2"><span style="color:#444">생크림미술의 단계별 스케치북</span></p>
			<p style="color:#444; font-size:1.3em; line-height:1.5em; font-family: 'NanumSquareRound',sans-serif;">아이의 성향에 맞추어 교재가 결정됩니다.<br>
			같은 단계라도 교재와 티칭법이 달라집니다. 단계별 12개월로 구성되어 있습니다.</p>
			<img src="<?php echo G5_URL?>/img/main01.jpg" width=""><br>
			<a href="<?php echo G5_THEME_SHOP_URL?>/sub2.php"><img src="<?php echo G5_URL?>/img/main05.png" class="main_effect"></a><br><br>
		</div>
		<div style="clear:both;"></div><br><br>


		<div class="" style="background:#fff;">
			<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery"><p class="main_title" style="color:#444; text-align:center; font-size:2.5em;">GALLERY</p></a>
			<?=latest("latest_gallery","gallery",8,24);?>
		</div>
		<div style="clear:both;"></div><br><br><br>


		<?php if($default['de_type3_list_use']) { ?>
		<!-- 최신상품 시작 { -->
		<section class="sct_wrap">
			<header>
				<div style="text-align:center">
					<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=3" ><p class="main_title"><span style="color:#1E439A; padding:10px; background:#fff;">&nbsp;NEW&nbsp;&nbsp;<span style="color:#444">BEST CATEGORY&nbsp;</span></span></p></a>
					<p style="height:1px; background:#ddd;position:absolute; width:98%; margin:0 auto; top:4%; z-index:-1" ></p>
					<!--<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=3" class="radius_btn" style=" color:#c9c9c9; margin-right:22px;">+ MORE</a>--> 
				</div>
				<!--
				<table width="100%;" cellpadding="0" cellspacing="0">
					<tr>
						<td width="50%" align="left">
							<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=3"><img src="<?php echo G5_IMG_URL?>/new_title.png"></a>
						</td>
						<td width="50%" align="right">
							<b><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=3" class="radius_btn" style=" color:#c9c9c9;">+ MORE</a></b>	
						</td>
					</tr>
				</table>-->
			</header>
			<table width="100%" cellpadding="0" cellspacing="0" style="padding-top: 20px; ">
				<tr>
					<!--
					<td width="20%" valign="top"><img src="<?php echo G5_URL?>/img/main_new.jpg" width="100%"></td>
					<td width="1%"></td>-->
					<td width="100%" valign="top">
						 <?php
							//최신상품
							$list = new item_list();
							$list->set_type(3);
							$list->set_list_mod(12);
							$list->set_list_row(1);
							$list->set_view('it_id', false);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
						?>
					</td>
				</tr>
			</table>
		   
		</section>
		<!-- } 최신상품 끝 -->
		<?php } ?>


		<?php if($default['de_type5_list_use']) { ?>
		<!-- 할인상품 시작 { -->
		<section class="sct_wrap" style="margin:40px 0; display:none;">
			<header>
				<div style="text-align:center">
					<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5"><p class="main_title"><span style="color:#c90609;padding: 10px;background: #fff;">SALE&nbsp;&nbsp;<span style="color:#444">BEST CATEGORY</span></span></p></a>
					<p style="height:1px; background:#ddd;position:absolute; width:98%; margin:0 auto; top:4%; z-index:-1" ></p>
					<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5" class="radius_btn" style=" color:#c9c9c9; margin-right:22px;">+ MORE</a> 
						
				</div>
				<!--
				<table width="100%;" cellpadding="0" cellspacing="0">
					<tr>
						<td width="50%" align="left">
							<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5"><img src="<?php echo G5_IMG_URL?>/sale_title.png"></a>
						</td>
						<td width="50%" align="right">
							<b><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5" class="radius_btn" style=" color:#c9c9c9;">+ MORE</a></b>	
						</td>
					</tr>
				</table>-->
			</header>
			<table width="100%" cellpadding="0" cellspacing="0" style="padding-top: 20px; ">
				<tr>
					<td width="20%" valign="top"><img src="<?php echo G5_URL?>/img/main_sale.jpg" width="100%"></td>
					<td width="1%"></td>
					<td width="79%" valign="top">
						 <?php
							//할인상품
							$list = new item_list();
							$list->set_type(5);
							$list->set_view('it_id', false);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
						?>
					</td>
				</tr>
			</table>
		</section>
		<!-- } 할인상품 끝 -->
		<?php } ?>


		<?php if($default['de_type2_list_use']) { ?>
		<!-- 추천상품 시작 { -->
		<section class="sct_wrap" style="display:none;">
			<header>
				<div style="text-align:center">
					<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=2" style="color:#444;padding: 10px;background: #fff;">
					
					<p class="main_title"><span style="color:#1E439A; padding:10px; background:#fff;">생크림추천&nbsp;&nbsp;<span style="color:#444">BEST CATEGORY</span></span></p></a>
					<p style="height:1px; background:#ddd;position:absolute; width:98%; margin:0 auto; top:7%; z-index:-1" ></p>
					<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=2" class="radius_btn" style=" color:#c9c9c9; margin-right:22px;">+ MORE</a> 
				</div>
				<!--
				<table width="100%;" cellpadding="0" cellspacing="0">
					<tr>
						<td width="50%" align="left">
							<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=2"><img src="<?php echo G5_IMG_URL?>/md_title.png"></a>
						</td>
						<td width="50%" align="right">
							<b><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=2" class="radius_btn" style=" color:#c9c9c9;">+ MORE</a></b>	
						</td>
					</tr>
				</table>-->
			</header>
			<table width="100%" cellpadding="0" cellspacing="0" style=" padding-top: 20px;">
				<tr>
					<td width="20%" valign="top"><img src="<?php echo G5_URL?>/img/main_md.jpg" width="100%"></td>
					<td width="1%"></td>
					<td width="79%" valign="top">
						 <?php
							//추천상품
							$list = new item_list();
							$list->set_type(2);
							$list->set_view('it_id', false);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
						?>
					</td>
				</tr>
			</table>
		</section>
		<!-- } 추천상품 끝 -->
		<?php } ?>
	</div>
</div>
</section>

<!--이슈아이템-->
<section style="display:none;">
<div style="padding:40px;">
	<div id="wrapper">
		<div id="container">
			<?php if($default['de_type1_list_use']) { ?>
			<!-- 히트상품 시작 { -->
			<section class="sct_wrap" style="padding:10px; height:450px;">
				<header>
					<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=1" style="color:#444"><p class="main_title">HIT ISSUE <span style="font-size:0.5em;color:#aaa;font-weight:normal">이슈아이템</span></p></a>
				</header>
				<?php
				$list = new item_list();
				$list->set_type(1);
				$list->set_view('it_img', true);
				$list->set_view('it_id', true);
				$list->set_view('it_name', true);
				$list->set_view('it_basic', true);
				$list->set_view('it_cust_price', true);
				$list->set_view('it_price', true);
				$list->set_view('it_icon', true);
				$list->set_view('sns', true);
				echo $list->run();
				?>
			</section>
			<!-- } 히트상품 끝 -->
			<?php } ?>
		</div>
	</div>
</div>
</section>



<!--브렌드 board-->
<section style="display:none;">
<div style="padding-top:30px; padding-bottom:30px;">
	<div id="wrapper">
		<div id="container">
			<table width="100%" cellpadding="5" cellspacing="5" border="0">
				<!--se1-->
				<tr>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1010"><img src="<?php echo G5_URL?>/img/issue_b_01.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('1010', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							
							echo $list->run();
							?>
						</div>
					</td>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1020"><img src="<?php echo G5_URL?>/img/issue_b_02.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('1020', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1030"><img src="<?php echo G5_URL?>/img/issue_b_03.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('1030', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
				</tr>
				<!--se1-->
				<!--se2-->
				<tr>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1040"><img src="<?php echo G5_URL?>/img/issue_b_04.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('1040', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1050"><img src="<?php echo G5_URL?>/img/issue_b_05.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('1050', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1060"><img src="<?php echo G5_URL?>/img/issue_b_06.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('1060', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
				</tr>
				<!--se2-->
				<!--se3-->
				<tr>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1070"><img src="<?php echo G5_URL?>/img/issue_b_07.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('1070', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
					
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1090"><img src="<?php echo G5_URL?>/img/issue_b_09.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('1090', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10a0"><img src="<?php echo G5_URL?>/img/issue_b_10.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('10a0', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
				</tr>
				<!--se3-->
				<!--se4-->
				<tr>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10b0"><img src="<?php echo G5_URL?>/img/issue_b_11.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('10b0', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10c0"><img src="<?php echo G5_URL?>/img/issue_b_12.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('10c0', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10d0"><img src="<?php echo G5_URL?>/img/issue_b_13.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('10d0', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
				</tr>
				<!--se4-->
				<!--se5-->
				<tr>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10e0"><img src="<?php echo G5_URL?>/img/issue_b_14.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('10e0', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10f0"><img src="<?php echo G5_URL?>/img/issue_b_15.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('10f0', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
					<td width="33.333%" style="background:#fff;" valign="top">
						<div>
							<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10g0"><img src="<?php echo G5_URL?>/img/issue_b_16.jpg" width="100%"></a>
						</div>
						<div class="brand_list">
							<?php
							$list = new item_list();
							$list->set_category('10g0', 1);
							$list->set_list_mod(2);
							$list->set_list_row(1);
							$list->set_img_size(150, 150);
							$list->set_list_skin(G5_SHOP_SKIN_PATH.'/list.40.skin.php');
							$list->set_view('it_img', true);
							$list->set_view('it_id', true);
							$list->set_view('it_name', true);
							$list->set_view('it_basic', true);
							$list->set_view('it_cust_price', true);
							$list->set_view('it_price', true);
							$list->set_view('it_icon', true);
							$list->set_view('sns', true);
							echo $list->run();
							?>
						</div>
					</td>
				</tr>
				<!--se5-->
				<!--se6-->
				<!--<tr>
					
					<td width="33.333%" valign="top">
						
					</td>
					<td width="33.333%" valign="top">

					</td>
				</tr>-->
				<!--se6-->
			</table>
		</div>
	</div>
</div>
</section>




<!--매장소개-->
<div>
	<?php echo display_banner('하단'); ?>
</div>

<!--lookbook board-->
<div style="clear:both"></div>
<div style="padding:60px 0; display:none;">
	<div id="wrapper">
		<div id="container">
			<div>								
				<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery" style="color:#444"><p class="main_title">LOOK BOOK <span style="font-size:0.5em;color:#aaa;font-weight:normal">룩북</span> <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery" class="radius_btn" style=" color:#c9c9c9; float:right; margin-top:10px;">+ MORE</a></p></a>
				
			</div>
			<!--
			<div>				
				<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery"><img src="<?php echo G5_IMG_URL?>/lookbook_title.png" max-width="100%"></a>
				<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery" class="radius_btn" style=" color:#c9c9c9; float:right; margin-top:14px;">+ MORE</a>
			</div>-->
			<div><?=latest("theme/lookbook_latest","gallery",15,15);?></div>
		</div>
	</div>
</div>




<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
?>