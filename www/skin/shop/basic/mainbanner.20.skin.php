<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_SKIN_URL.'/style.css">', 0);

?>
<script src="<?php echo G5_URL?>/cus/owl.carousel.min.js"></script>
<link rel="stylesheet" href="<?php echo G5_URL?>/cus/owl.carousel.css">

<style>
#main_bn{position:relative;border:1px solid #ddd;border-top:0; z-index:9;}
#main_bn img{height:auto;width:100%;}

#main_bn .owl-prev,
#main_bn .owl-next{display: none;}

#main_bn .owl-pagination{z-index:10;position:absolute;bottom:10px;text-align:center;width:100%}
#main_bn .owl-page{width:40px;height:4px;background:#fff;display:inline-block;margin:3px;}
#main_bn .active{background:#333}
</style>
<?php
$max_width = $max_height = 0;
$bn_first_class = ' class="bn_first"';
$bn_sl = ' class="bn_sl"';

for ($i=0; $row=sql_fetch_array($result); $i++)
{
    if ($i==0) echo '<div id="main_bn" class="swipe">'.PHP_EOL.'<div class="bn_img">'.PHP_EOL;
    //print_r2($row);
    // 테두리 있는지
    $bn_border  = ($row['bn_border']) ? ' class="sbn_border"' : '';;
    // 새창 띄우기인지
    $bn_new_win = ($row['bn_new_win']) ? ' target="_blank"' : '';

    $bimg = G5_DATA_PATH.'/banner/'.$row['bn_id'];
    if (file_exists($bimg))
    {
        $banner = '';
        $size = getimagesize($bimg);

        if($size[2] < 1 || $size[2] > 16)
            continue;

        if($max_width < $size[0])
            $max_width = $size[0];

        if($max_height < $size[1])
            $max_height = $size[1];

        echo '<div class="item">'.PHP_EOL;
        if ($row['bn_url'][0] == '#')
            $banner .= '<a href="'.$row['bn_url'].'">';
        else if ($row['bn_url'] && $row['bn_url'] != 'http://') {
            $banner .= '<a href="'.G5_SHOP_URL.'/bannerhit.php?bn_id='.$row['bn_id'].'&amp;url='.urlencode($row['bn_url']).'"'.$bn_new_win.'>';
        }
        echo $banner.'<img src="'.G5_DATA_URL.'/banner/'.$row['bn_id'].'" width="'.$size[0].'" alt="'.$row['bn_alt'].'"'.$bn_border.'>';
        if($banner)
            echo '</a>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        $bn_first_class = '';
        $bn_sl = '';
    }
}

if ($i > 0) {
    echo '</div>'.PHP_EOL;
  /* echo '<div class="banner">
			<div><i class="fas fa-mobile-alt"></i>
				<p class="txt"><span class="tit">이용안내</span><br>
				060-604-0303 전화연결 후 비지정상담 1번과 지정상담 2번을 선택,<br>
	    		지정상담 2번을 선택하신 분은 상담사 지정번호를 입력하면 상담선생님과 연결됩니다.</p>
			</div>
		<div><i class="fas fa-mobile-alt"></i>
				<p class="txt"><span class="tit">이용안내22</span><br>
				060-604-0303 전화연결 후 비지정상담 1번과 지정상담 2번을 선택,<br>
	    		지정상담 2번을 선택하신 분은 상담사 지정번호를 입력하면 상담선생님과 연결됩니다.</p>
			</div>
		</div>'.PHP_EOL;  */
    echo '</div>'.PHP_EOL; 
?>

<script>
$(document).ready(function() {
    $(".bn_img").owlCarousel({
        autoPlay : true,
        navigation : true, 
        pagination: true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
    });
});
</script>

<?php
}
?>