<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_MSHOP_SKIN_URL.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL ?>/jquery.fancylist.js"></script>
<?php if($config['cf_kakao_js_apikey']) { ?>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script src="<?php echo G5_JS_URL; ?>/kakaolink.js"></script>
<script>
    // 사용할 앱의 Javascript 키를 설정해 주세요.
    Kakao.init("<?php echo $config['cf_kakao_js_apikey']; ?>");
</script>
<?php } ?>

<!-- 상품진열 10 시작 { -->
<?php
$li_width = intval(100 / $this->list_mod);
$li_width_style = ' style="width:'.$li_width.'%;"';

for ($i=0; $row=sql_fetch_array($result); $i++) {
    if ($i == 0) {
        if ($this->css) {
            echo "<ul id=\"sct_wrap\" class=\"{$this->css}\">\n";
        } else {
            echo "<ul id=\"sct_wrap\" class=\"sct sct_10\">\n";
        }
    }

    if($i % $this->list_mod == 0)
        $li_clear = ' sct_clear';
    else
        $li_clear = '';

    echo "<li class=\"sct_li{$li_clear}\"$li_width_style>\n";

    if ($this->href) {
        echo "<div class=\"sct_img\"><a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
    }

    if ($this->view_it_img) {
        echo get_it_image($row['it_id'], $this->img_width, $this->img_height, '', '', stripslashes($row['it_name']))."\n";
    }

    if ($this->href) {
        echo "</a></div>\n";
    }


    if ($this->view_it_id) {
        echo "<div class=\"sct_id\">&lt;".stripslashes($row['it_id'])."&gt;</div>\n";
    }

/*     if ($this->href) {
        echo "<div class=\"sct_txt\"><a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
    }

    if ($this->view_it_name) {
        echo stripslashes($row['it_name'])."\n";
    }

    if ($this->href) {
        echo "</a></div>\n";
    } */

/*     if ($this->view_it_price) {
        echo "<div class=\"sct_cost\">\n";
        echo display_price(get_price($row), $row['it_tel_inq'])."\n";
        echo "</div>\n";
    } */
    
    /*20210211*/
    if ($this->view_it_model && $row['it_model']) {
    	echo "<div class=\"sct_model\">".stripslashes($row['it_model'])."</div>\n";
    }
    if ($this->view_it_brand && $row['it_brand']) {
    	echo "<div class=\"sct_brand\">".stripslashes($row['it_brand'])."</div>\n";
    }
    if ($this->view_it_basic && $row['it_basic']) {
    	echo "<div class=\"sct_basic\">".stripslashes($row['it_basic'])."</div><i class='fas fa-phone-volume'></i>\n";
    }
    $sql_review = " select count(*) as cnt from `{$g5['g5_shop_item_use_table']}` where it_id = ".$row['it_id']." and is_confirm = '1' ";
    $row_review = sql_fetch($sql_review);
    $item_use_count = $row_review['cnt'];
    
    echo "<span class='reviewCount'>".stripslashes($row['it_name'])." 상담후기 ".$item_use_count." 건</span>";
    if ($this->view_it_star_score) {
    	$star_score = get_star_image($row['it_id']);
    	if ($star_score) {
    		echo "<img src=\"".G5_SHOP_URL."/img/s_star".$star_score.".png\" width=\"100\">";
    	}
    }
    echo "<div class='btm_call'><span class='num'>코인상담: 060-604-0303</span><span class='num2'><span class='txt'>전화연결 후</span>";
    if ($this->view_it_maker && $row['it_maker']) {
    	echo "<span class=\"sct_maker\">".stripslashes($row['it_maker'])."</span>\n";
    }
    echo "</span></div>";	
    

    echo "</li>\n";
}

if ($i > 0) echo "</ul>\n";

if($i == 0) echo "<p class=\"sct_noitem\">등록된 상품이 없습니다.</p>\n";
?>
<!-- } 상품진열 10 끝 -->
