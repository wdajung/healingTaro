<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
global $is_admin;

$n_thumb_width = 124; //썸네일 가로 크기
$n_thumb_height = 174; //썸네일 세로 크기
?>

<link rel="stylesheet" href="<?php echo $latest_skin_url; ?>/style.css">

<section class="n_gallery_wrap">
  
  <?php if (count($list) == 0) { //게시물이 없을 경우 ?>
  <div class="n_no_list">게시물이 없습니다.</div>
  	
  <?php } else { //게시물이 있을 경우 ?>
  <ul class="n_thumb">
    <?php for ($i = 0; $i < count($list); $i++) { ?>
    <li style="background:#fff">
      <a href="<?php echo $list[$i]['wr_link1']; ?>">
      <?php
      $n_thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $n_thumb_width, $n_thumb_height);
      $n_noimg = "$latest_skin_url/img/noimg.gif";
      if($n_thumb['src']) {
          $img_content = '<img src="'.$n_thumb['src'].'" width="'.$n_thumb_width.'" height="'.$n_thumb_height.'" title="" />';
      } else {
	      $img_content = '<img src="'.$n_noimg.'" width="'.$n_thumb_width.'" height="'.$n_thumb_height.'" alt="이미지없음" title="" />';
      }
      echo $img_content;
      ?>
      </a>
      <p style="text-align:center;">
			 <a href="<?php echo $list[$i]['wr_link1'] ?>"><font size="2em"><b><?php echo $list[$i]['ca_name'] ?></b></font></a><br>
			<a href="<?php echo $list[$i]['wr_link1']; ?>"><font size="1.8em" color="#999"><b><?php echo $list[$i]['subject']; ?></font></b></a>
		</p>
    </li>
    <?php } ?>
  </ul>

  <?php } ?>

</section>
