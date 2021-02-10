<?php
include_once('./_common.php');

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>
	</div>
</div>

<style>
.tap {float:left; width:50%; text-align:center; height:60px; line-height:60px; font-size:1.5em; background:#1e439a; color:#fff;}

.tab_menu05{margin:30px auto 0; text-align:center; margin-bottom:0px;}
.tab_menu05 ul{text-align:center;margin: 0 auto; display: inline-block; list-style:none; padding: 0px;}
.tab_menu05 ul li{float:left; height:50px; line-height:50px; width:120px; border:1px solid #cccccc; border-left:none;text-align:center; transition: all 0.25s; }
.tab_menu05 ul li a{display:block; font-size:15px; color:#999999; transition: all 0.25s; text-decoration:none;}
.tab_menu05 ul li:first-child{ border-left:1px solid #cccccc; border-radius: 25px 0 0 25px;}
.tab_menu05 ul li:nth-child(2){ border-radius:0 25px 25px 0;}
.tab_menu05 ul li.on{position:relative;}
.tab_menu05 ul li.on:after{content:'';position:absolute; bottom:0; left:50%; margin-left:-4.5px;margin-bottom:-4.5px;width:9px; height:9px; border-radius:100%; background:#1e439a}
.tab_menu05 ul li.on a{color:#1e439a}
.tab_menu05 ul li:hover{ transition: all 0.25s;}
.tab_menu05 ul li a:hover{color:#1e439a;transition: all 0.25s;}
.interior .sub_stext_02{font-size:20px;letter-spacing:-0.01em;font-weight:400 ! important;color:#4d4c4b;padding:20px 0 17px 0;line-height:28px;
						border:0px solid #dddcd3;text-align:left}
</style>


<img src="<?php echo G5_URL?>/img/subbgm.jpg" class="img-responsive" width="100%">

<!--issue board-->
<section style="font-family: 'NanumSquareRound',sans-serif;">
<div class="tab_menu05 hidden-xs hidden-sm">
	<ul>
		<li class="on"><a href="<?php echo G5_URL?>/sub1.php">생크림소개</a></li>
		<li class=""><a href="<?php echo G5_URL?>/sub1_2.php">오시는길</a></li>
		<p class="clear"></p>
	</ul>
</div>
<!--					
<div>
	<a href="<?php echo G5_THEME_SHOP_URL?>/sub1.php"><div class="tap" style="">생크림소개 <span style="float:right;">|</span></div></a>
	<a href="<?php echo G5_THEME_SHOP_URL?>/sub1_2.php"><div class="tap">오시는길</div></a>
</div> -->

<div style="padding-top:30px; padding-bottom:30px;">
	<div id="wrapper">		
		<div id="container">
			<img src="<?php echo G5_URL?>/img/m_sub1_1.png" class="img-responsive" style="width:100%">
			<img src="<?php echo G5_URL?>/img/m_sub1_2.png" class="img-responsive" style="width:100%">
		</div>
	</div>
</div>
</section>


<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
?>