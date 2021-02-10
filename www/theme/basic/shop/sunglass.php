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


<!--issue board-->
<section>
<div style="padding-top:30px; padding-bottom:30px;">
	
	<div id="wrapper">		
		<div id="container">
			<div  style="margin-bottom:30px">
				<?php echo display_banner('브랜드'); ?>
			</div>
			<table width="100%" cellpadding="5" cellspacing="5" border="0">
				<!--se1-->
				<tr>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1010"><img src="<?php echo G5_URL?>/img/issue_b_01.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1020"><img src="<?php echo G5_URL?>/img/issue_b_02.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1030"><img src="<?php echo G5_URL?>/img/issue_b_03.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1040"><img src="<?php echo G5_URL?>/img/issue_b_04.jpg" width="100%"></a>
					</td>
				</tr>
				<tr>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1050"><img src="<?php echo G5_URL?>/img/issue_b_05.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1060"><img src="<?php echo G5_URL?>/img/issue_b_06.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1070"><img src="<?php echo G5_URL?>/img/issue_b_07.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1080"><img src="<?php echo G5_URL?>/img/issue_b_08.jpg" width="100%"></a>
					</td>
				</tr>
				<tr>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=1090"><img src="<?php echo G5_URL?>/img/issue_b_09.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10a0"><img src="<?php echo G5_URL?>/img/issue_b_10.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10b0"><img src="<?php echo G5_URL?>/img/issue_b_11.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10c0"><img src="<?php echo G5_URL?>/img/issue_b_12.jpg" width="100%"></a>
					</td>
				</tr>
				<tr>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10d0"><img src="<?php echo G5_URL?>/img/issue_b_13.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10e0"><img src="<?php echo G5_URL?>/img/issue_b_14.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10f0"><img src="<?php echo G5_URL?>/img/issue_b_15.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10g0"><img src="<?php echo G5_URL?>/img/issue_b_16.jpg" width="100%"></a>
					</td>				
				</tr>
				<tr>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10h0"><img src="<?php echo G5_URL?>/img/issue_b_17.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10i0"><img src="<?php echo G5_URL?>/img/issue_b_18.jpg" width="100%"></a>
					</td>
					<td width="25%">
						<a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10j0"><img src="<?php echo G5_URL?>/img/issue_b_19.jpg" width="100%"></a>
					</td>

				</tr>
			</table>
		</div>
	</div>
</div>
</section>


<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
?>