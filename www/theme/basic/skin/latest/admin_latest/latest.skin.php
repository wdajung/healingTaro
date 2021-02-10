<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->

<div class="tbl_head01 tbl_wrap">
    <table>
        <caption>최근문의사항</caption>
        <thead>
			<tr>
				<th scope="col">이름</th>
				<th scope="col">제목</th>
				<th scope="col">날짜</th>
			</tr>
        </thead>
        <tbody>
			<?php for ($i=0; $i<count($list); $i++) {  ?>
			<tr>
				<td align="center">
					<a href="<?=$list[$i]['href']?>">
						<?=$list[$i]['wr_name']?>
					</a>
				</td>
				<td align="center">
					<a href="<?=$list[$i]['href']?>">
						<?=$list[$i]['wr_subject']?>
					</a>
				</td>
				<td align="center">
					<a href="<?=$list[$i]['href']?>">
						<?=$list[$i]['datetime']?>
					</a>
				</td>
				
			</tr>
			<?}?>
			<?php if (count($list) == 0) { //게시물이 없을 때  ?>
			<tr>
				<th colspan="3">게시물이 없습니다.</th>
			</tr>
			<?php }  ?>
		</tbody>
    </table>
    
</div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->