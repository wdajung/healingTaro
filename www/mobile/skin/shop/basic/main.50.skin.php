<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_SKIN_URL.'/style.css">', 0);
?>
<link rel="stylesheet" href="<?php echo G5_URL?>/css/lightslider.css">
<script src="<?php echo G5_URL?>/js/lightslider.js"></script>
<style>

ul{
	list-style: none outside none;
	padding-left: 0;
	margin: 0;
}
.demo .item{
	margin-bottom: 30px;
}
.content-slider li{
	text-align: center;
	width:100%;
}
.content-slider h3 {
	margin: 0;
	padding: 70px 0;
}
.demo{
	width: 400px;
}
</style>

<style>
.sct_10 .stc_a{
	display:block;
	text-decoration:none;
	text-overflow:ellipsis;
	overflow:hidden;
	white-space:nowrap;
	line-height:20px;
	padding:0;
	width:100%;
}
</style>

<div class="demo">
	<div class="item">
		<ul id="autoplay5" class="content-slider">
			<?for ($i=1; $row=sql_fetch_array($result); $i++) {?>			
			<?
			 if ($this->list_mod >= 2) { // 1줄 이미지 : 2개 이상
				if ($i%$this->list_mod == 0) $sct_last = 'sct_last'; // 줄 마지막
				else if ($i%$this->list_mod == 1) $sct_last = 'sct_clear'; // 줄 첫번째
				else $sct_last = '';
			} else { // 1줄 이미지 : 1개
				$sct_last = 'sct_clear';
			}
			?>
			<?
				echo "<li class=\"sct_li {$sct_last}\">\n";

			if ($this->href) {
				echo "<div class=\"sct_img\"><a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
			}

			if ($this->view_it_img) {
				echo get_it_image($row['it_id'], $this->img_width, $this->img_height, '', '', stripslashes($row['it_name']))."\n";
			}

			if ($this->href) {
				echo "</a></div>\n";
			}

			if ($this->view_it_icon) {
				echo "<div class=\"sct_icon\">".item_icon($row)."</div>\n";
			}

			if ($this->view_it_id) {
				echo "<div class=\"sct_id\">&lt;".stripslashes($row['it_id'])."&gt;</div>\n";
			}

			if ($this->href) {
				echo "<div class=\"sct_txt\" style='font-weight:bold;'><a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
			}

			if ($this->view_it_name) {
				echo cut_str(stripslashes($row['it_name']),10,"..")."\n";
			}

			if ($this->href) {
				echo "</a></div>\n";
			}

			if ($this->view_it_cust_price || $this->view_it_price) {

				echo "<div class=\"sct_cost\">\n";

				if ($this->view_it_cust_price && $row['it_cust_price']) {
					echo "<strike>".display_price($row['it_cust_price'])."</strike>\n";
				}

				if ($this->view_it_price) {
					echo display_price(get_price($row), $row['it_tel_inq'])."\n";
				}

				echo "</div>\n";

			}
			echo "</li>\n";
			?>
			<?}?>
		</ul>
	</div>
</div>
<?
if($i == 1) echo "<p class=\"sct_noitem\">등록된 상품이 없습니다.</p>\n";
?>
<script>

$(document).ready(function() {
	var autoplaySlider = $('#autoplay5').lightSlider({
		auto:false,
		loop:true,
		pauseOnHover: true,
		onBeforeSlide: function (el) {
			$('#current').text(el.getCurrentSlideCount());
		} 
	});
	$('#total').text(autoplaySlider.getTotalSlideCount());
});
</script>