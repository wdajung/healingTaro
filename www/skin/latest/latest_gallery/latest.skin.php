<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$imgwidth = 290; //표시할 이미지의 가로사이즈
$imgheight = 230; //표시할 이미지의 세로사이즈
?>

<style>
#oneshot { position:relative;margin:0 0 0 -5px;margin-left:6px}
#oneshot .la_title{display: block; font-size: 1.333em;font-weight:bold;margin-left:6px}
#oneshot .img_set{width:<?php echo $imgwidth ?>px; height:<?php echo $imgheight ?>px; background:#fafafa;padding:0;}
#oneshot .subject_set{width:<?php echo $imgwidth - 13 ?>px; height:38px; padding:5px 10px 10px 3px; z-index:1; bottom:0; left:0;}
#oneshot .subject_set .sub_title{display:block;font-size:1.167em;padding:15px 10px 8px;font-weight:bold;text-overflow: ellipsis;  overflow: hidden;  white-space: nowrap;}
#oneshot .subject_set .sub_content{color:#8c8a8a;height:30px;overflow:hidden;padding:3px 0 0;font-family:NanumGothic,dotum;}


#oneshot ul {list-style:none;clear:both;margin-top:0px;padding:0;}
#oneshot li{float:left;list-style:none;text-decoration:none;padding:0 7px 7px 0px}
.subject_set  a:link, a:visited {text-decoration:none}
.subject_set  a:hover, a:focus, a:active {color:#e60012;text-decoration:none}

/* 폰트불러오기 */
@font-face {font-family:'NanumBarunGothic';src: url('<?php echo $latest_skin_url ?>/NanumBarunGothic.eot');}
@font-face {font-family:'NanumGothic';src: url('<?php echo $latest_skin_url ?>/NanumGothic.eot');}

</style>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div id="oneshot">
	<!--<div class="la_title"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=<?php echo $bo_table; ?>&me_code=<?php echo $me_code?>"><?php echo $bo_subject; ?></a></div>-->
	<ul>
	<?php for ($i=0; $i<count($list); $i++) { ?>	
		<li class="main_effect">
			<div class="img_set">
				<a href="<?php echo $list[$i]['href'] ?>">
					<?php                
					$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $imgwidth, $imgheight);    					            
					if($thumb['src']) {
					$img_content = '<img class="img_left" src="'.$thumb['src'].'" alt="'.$list[$i]['subject'].'" width="'.$imgwidth.'" height="'.$imgheight.'">';
					} else {
					$img_content = 'NO IMAGE';
					}                
					echo $img_content;												               
					?>
				</a>
			</div>

		</li>
	<?php } ?>
	</ul>
</div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->