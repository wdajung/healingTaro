<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$popular_skin_url.'/style.css">', 0);
?>
<style>
.ticker {
 height: 40px;
 overflow: hidden;
 margin: 0;
 padding: 0;
 list-style: none;
}
.ticker li {
 height: 30px;
 padding: 5px;
 margin: 0px 5px;
}
</style>
<!-- 인기검색어 시작 { -->
<!--<section id="popular">
    <div>
        <h2>인기검색어</h2>
        <ul>
        <?php for ($i=0; $i<count($list); $i++) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/search.php?sfl=wr_subject&amp;sop=and&amp;stx=<?php echo urlencode($list[$i]['pp_word']) ?>"><?php echo get_text($list[$i]['pp_word']); ?></a></li>
        <?php }  ?>
        </ul>
    </div>
</section>-->
<!-- } 인기검색어 끝 -->
<!--<ul id="ticker_01" class="ticker">
	<?php for ($i=0; $i<count($list); $i++) {  ?>
		<li><a href="<?php echo G5_BBS_URL ?>/search.php?sfl=wr_subject&amp;sop=and&amp;stx=<?php echo urlencode($list[$i]['pp_word']) ?>"><?php echo get_text($list[$i]['pp_word']); ?></a></li>
	<?php }  ?>
</ul>-->
<ul id="ticker_01" class="ticker" style="float:right;">
	<?$j=1;?>
	<?php for ($i=0; $i<count($list); $i++) {  ?>
		<li>
			<a href="<?php echo G5_BBS_URL ?>/search.php?sfl=wr_subject&amp;sop=and&amp;stx=<?php echo urlencode($list[$i]['pp_word']) ?>">
				<span style="width:30px; height:30px; border-radius:5px; padding:3px; color:#222; background:#efefef"><?=$j;?></span>&nbsp;<?php echo get_text($list[$i]['pp_word']); ?>
			</a>
		</li>
	<?$j++;?>
	<?php }  ?>
</ul>
<script>
 function tick(){
  $('#ticker_01 li:first').slideUp( function () { $(this).appendTo($('#ticker_01')).slideDown(); });
 }
 setInterval(function(){ tick () }, 3000);
</script>