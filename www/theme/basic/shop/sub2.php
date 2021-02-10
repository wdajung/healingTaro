<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

define("_INDEX_", TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>
	</div>
</div>


<img src="<?php echo G5_URL?>/img/subbg.jpg" class="img-responsive" width="100%">


<!--issue board-->
<section>
<div style="padding-top:30px; padding-bottom:30px;">
	<div id="wrapper">		
		<div id="container">
			<img src="<?php echo G5_URL?>/img/sub2_1.png" class="img-responsive">
		</div>
	</div>
</div>
</section>


<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
?>