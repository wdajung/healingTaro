<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div class="lt">
    <ul style="padding:0px;">
    <?php for ($i=0; $i<count($list); $i++) {  ?>
		<li style="">
			<?php
				echo "<a href=\"".$list[$i]['href']."\">";
					if ($list[$i]['is_notice'])
						echo "<strong>".$list[$i]['subject']."</strong>";
					else
						echo $list[$i]['subject'];
					if ($list[$i]['comment_cnt'])
						echo $list[$i]['comment_cnt'];
				echo "</a>";
			?>
			<span style="float:right; color:#949494; padding-top:3px;">
				<b><?=$list[$i]['datetime']?></b>
			</span>
		</li>

    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li>게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    
</div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->