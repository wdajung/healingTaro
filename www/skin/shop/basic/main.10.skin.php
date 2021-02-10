<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_SKIN_URL.'/style.css">', 0);
?>

<!-- 상품진열 10 시작 { -->
<?php
for ($i=1; $row=sql_fetch_array($result); $i++) {
    if ($this->list_mod >= 2) { // 1줄 이미지 : 2개 이상
        if ($i%$this->list_mod == 0) $sct_last = 'sct_last'; // 줄 마지막
        else if ($i%$this->list_mod == 1) $sct_last = 'sct_clear'; // 줄 첫번째
        else $sct_last = '';
    } else { // 1줄 이미지 : 1개
        $sct_last = 'sct_clear';
    }

    if ($i == 1) {
        if ($this->css) {
            echo "<ul class=\"{$this->css}\">\n";
        } else {
            echo "<ul class=\"sct sct_10\">\n";
        }
    }

    echo "<li class=\"sct_li {$sct_last}\" style=\"width:{$this->img_width}px\">\n";

    if ($this->href) {
        echo "<div class=\"sct_img\"><a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
    }

    if ($this->view_it_img) {
        echo get_it_image($row['it_id'], $this->img_width, $this->img_height, '', '', stripslashes($row['it_name']))."\n";
    }

    if ($this->href) {
    	if ($this->view_it_model && $row['it_model']) {
    		echo "<div class=\"sct_model\">".stripslashes($row['it_model'])."</div>\n";
    	}
    	if ($this->view_it_brand && $row['it_brand']) {
    		echo "<div class=\"sct_brand\">".stripslashes($row['it_brand'])."</div>\n";
    	}
        echo "</a></div>\n";
    }
    
    

	/*
    if ($this->view_it_icon) {
        echo "<div class=\"sct_icon\">".item_icon($row)."</div>\n";
    }
	*/

    if ($this->view_it_id) {
        echo "<div class=\"sct_id\">&lt;".stripslashes($row['it_id'])."&gt;</div>\n";
    }

    if ($this->href) {
        echo "<div class=\"conts\"><div class=\"sct_txt\"><a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
    }


    if ($this->href) {
        echo "</a></div>\n";
    }

    if ($this->view_it_basic && $row['it_basic']) {
	        echo "<div class=\"sct_basic\">".stripslashes($row['it_basic'])."</div><i class='fas fa-phone-volume'></i>\n";
    }

    if ($this->view_it_origin && $row['it_origin']) {
            echo "<div class=\"sct_origin\">".stripslashes($row['it_origin'])."</div>\n";
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
    
    if ($this->view_it_cust_price || $this->view_it_price) {

        echo "<div class=\"sct_cost\">\n";

        if ($this->view_it_cust_price && $row['it_cust_price']) {
            echo "<strike>".display_price($row['it_cust_price'])."</strike>\n";
        }

        if ($this->view_it_price) {
            echo display_price(get_price($row), $row['it_tel_inq'])."\n";
        }

        echo "</div></div>\n";

    }

	/*
    if ($this->view_sns) {
        $sns_top = $this->img_height + 10;
        $sns_url  = G5_SHOP_URL.'/item.php?it_id='.$row['it_id'];
        $sns_title = get_text($row['it_name']).' | '.get_text($config['cf_title']);
        echo "<div class=\"sct_sns\" style=\"top:{$sns_top}px\">";
        echo get_sns_share_link('facebook', $sns_url, $sns_title, G5_SHOP_SKIN_URL.'/img/sns_fb_s.png');
        echo get_sns_share_link('twitter', $sns_url, $sns_title, G5_SHOP_SKIN_URL.'/img/sns_twt_s.png');
        echo get_sns_share_link('googleplus', $sns_url, $sns_title, G5_SHOP_SKIN_URL.'/img/sns_goo_s.png');
        echo "</div>\n";
    }
	*/
    
    echo "<div class='btm_call'><span class='num'>코인상담: 060-604-0303</span><span class='num2'><span class='txt'>전화연결 후</span>";
	if ($this->view_it_maker && $row['it_maker']) {
	            echo "<span class=\"sct_maker\">".stripslashes($row['it_maker'])."</span>\n";
	    }
	echo "</span></div>";	

    echo "</li>\n";
}

if ($i > 1) echo "</ul>\n";

if($i == 1) echo "<p class=\"sct_noitem\">등록된 상품이 없습니다.</p>\n";
?>
<!-- } 상품진열 10 끝 -->