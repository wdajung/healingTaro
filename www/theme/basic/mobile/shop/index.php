<?php
include_once('./_common.php');

define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>

<style>
.m_more_btn{
	float:right; 
	margin-right:15px; 
	border:1px solid #c9c9c9; 
	padding:2px 4px 2px 4px; 
	border-radius:10px; 
	color:#c9c9c9;
}
.main_title {font-family: 'NanumSquareRound',sans-serif; font-size:2.0em; color:#444;font-weight:900;margin-bottom:15px; text-align:center;}
.main_title2 {font-family: 'NanumSquareRound',sans-serif; font-size:1.9em; color:#444;font-weight:700; margin-top:30px;}
.main_title3 {font-family: 'NanumSquareRound',sans-serif; font-size:1.5em; font-weight:700;}

.main_effect {opacity:1}
.main_effect:hover {opacity:0.8;
-webkit-transition: all 0.5s ease;
-moz-transition: all 0.5s ease;
-o-transition: all 0.5s ease;
-ms-transition: all 0.5s ease;
transition: all 0.5s ease;}
</style>
<script src="<?php echo G5_JS_URL; ?>/swipe.js"></script>
<script src="<?php echo G5_JS_URL; ?>/shop.mobile.main.js"></script>


<?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>


<?php if($default['de_mobile_type3_list_use']) { ?>
<div class="sct_wrap mainlist" style="font-family: 'NanumSquareRound',sans-serif;">
	<header>
		<!--<h2>
			<span>
				<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=2">생크림 추천상품</a>
			</span>
			<span class="m_more_btn" onclick="location.href='<?=G5_SHOP_URL?>/listtype.php?type=2'">
				+MORE
			</span>
		</h2>-->
	</header>
	<?php
	$list = new item_list();
	$list->set_mobile(true);
	$list->set_type(3);
	$list->set_view('it_id', false);
	$list->set_view('it_name', true);
	$list->set_view('it_cust_price', false);
	$list->set_view('it_price', true);
	$list->set_view('it_icon', false);
	$list->set_view('sns', false);
	echo $list->run();
	?>
</div>
<?php } ?>

<?php if($default['de_mobile_type1_list_use']) { ?>
<div class="sct_wrap" style=" display:none;">
	<header>
		<h2>
			<span>
				<a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=1">생크림 히트상품</a>
			</span>
			<span class="m_more_btn" onclick="location.href='<?=G5_SHOP_URL?>/listtype.php?type=1'">
				+MORE
			</span>
		</h2>
	</header>
	<?php
	$list = new item_list();
	$list->set_mobile(true);
	$list->set_type(1);
	$list->set_view('it_id', false);
	$list->set_view('it_name', true);
	$list->set_view('it_cust_price', false);
	$list->set_view('it_price', true);
	$list->set_view('it_icon', false);
	$list->set_view('sns', false);
	echo $list->run();
	?>
</div>
<?php } ?>

        

<?php if($default['de_mobile_type3_list_use']) { ?>
<div class="sct_wrap" style="display:none;">
	<header>
		<p class="main_title"><span style="color:#1E439A; padding:10px; background:#fff;">생크림추천 <span style="color:#444">BEST CATEGORY</span></span></p></a>
		<!--
		<h2>
			<span><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=3">생크림 신상품</a></span>
			<span class="m_more_btn" onclick="location.href='<?=G5_SHOP_URL?>/listtype.php?type=3'">
				+MORE
			</span>
		</h2>-->
	</header>
	<?php
	$list = new item_list();
	$list->set_mobile(true);
	$list->set_type(3);
	$list->set_view('it_id', false);
	$list->set_view('it_name', true);
	$list->set_view('it_cust_price', false);
	$list->set_view('it_price', true);
	$list->set_view('it_icon', false);
	$list->set_view('sns', false);
	echo $list->run();
	?>
</div>
<?php } ?>
       

<?php if($default['de_mobile_type5_list_use']) { ?>
<div class="sct_wrap" style=" display:none;">
	<header>
		<h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5">생크림 할인상품</a></h2>
		<p class="sct_wrap_hdesc"><?php echo $config['cf_title']; ?> 할인상품 모음</p>
	</header>
	<?php
	$list = new item_list();
	$list->set_mobile(true);
	$list->set_type(5);
	$list->set_view('it_id', false);
	$list->set_view('it_name', true);
	$list->set_view('it_cust_price', false);
	$list->set_view('it_price', true);
	$list->set_view('it_icon', false);
	$list->set_view('sns', false);
	echo $list->run();
	?>
</div>
<?php } ?>








<?php
include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
?>