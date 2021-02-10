<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_CSS_URL.'/style.css">', 0);

/*
리스트의 상품이 순차적으로 위에서 내려옴
*/
?>

<!-- 이전 재생 정지 다음 버튼 시작 { -->
<ul id="btn_smt_<?php echo $this->type; ?>" class="sctrl">
    <li><button type="button" class="sctrl_play">효과재생<span></span></button></li>
    <li><button type="button" class="sctrl_stop">효과정지<span></span></button></li>
</ul>
<!-- } 이전 재생 정지 다음 버튼 끝 -->

<!-- 상품진열 50 시작 { -->
<?php
for ($i=1; $row=sql_fetch_array($result); $i++) {
    $sct_last = '';
    if($i>1 && $i%$this->list_mod == 0)
        $sct_last = ' sct_last'; // 줄 마지막

    if ($i == 1) {
        if ($this->css) {
            echo "<div id=\"smt_{$this->type}\" class=\"{$this->css}\">\n";
        } else {
            echo "<div id=\"smt_{$this->type}\" class=\"sct smt_50\">\n";
        }
        echo "<ul class=\"sct_ul sct_ul_first\">\n";
    }

    if ($i>1 && $i%$this->list_mod == 1) {
        echo "</ul>\n";
        echo "<ul class=\"sct_ul\">\n";
    }

    echo "<li class=\"sct_li{$sct_last}\" style=\"width:{$this->img_width}px\">";

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
        echo "<div class=\"sct_txt\"><a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
    }

    if ($this->view_it_name) {
        echo stripslashes($row['it_name'])."\n";
    }

    if ($this->href) {
        echo "</a></div>\n";
    }

    if ($this->view_it_basic && $row['it_basic']) {
        echo "<div class=\"sct_basic\">".stripslashes($row['it_basic'])."</div>\n";
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

    echo "</li>\n";
}

if ($i > 1) {
    echo "</ul>\n";
    echo "</div>\n";
}

if($i == 1) echo "<p class=\"sct_noitem\">등록된 상품이 없습니다.</p>\n";
?>

<script>
(function() {
    var intervals = {};

    var methods = {
        init: function(option)
        {
            if(this.length < 1)
                return false;

            var $smt = this.find("ul.sct_ul");
            var $smt_a = $smt.find("a");
            var count = $smt.size();
            var height = 0;
            var c_idx = o_idx = 0;
            var fx = null;
            var delay = 0;
            var el_id = this[0].id;

            $smt.find("li.sct_li").each(function() {
                var h = $(this).outerHeight(true);
                if(h > height)
                    height = h;
            });

            this.height(height);
            $smt.height(height);

            // 기본 설정값
            var settings = $.extend({
                interval: 6000,
                duration: 800,
                delay: 300
            }, option);

            // 초기실행
            if(count > 0 && intervals[el_id] == undefined) {
                $smt.find("li.sct_li").css("top", "-"+height+"px");
                $smt.eq(0).find("li.sct_li").each(function() {
                    $(this).delay(delay).animate(
                        { top: "+="+height+"px" }, settings.duration
                    );

                    delay += settings.delay;
                });
            }

            set_interval();

            $smt.hover(
                function() {
                    clear_interval();
                },
                function() {
                    set_interval();
                }
            );

            $smt_a.on("focusin", function() {
                clear_interval();
            });

            $smt_a.on("focusout", function() {
                set_interval();
            });

            function item_drop() {
                $smt.each(function(index) {
                    if($(this).is(":visible")) {
                        o_idx = index;
                        return false;
                    }
                });

                delay = 0;

                $smt.eq(o_idx).css("display", "none");
                $smt.eq(o_idx).find("li.sct_li").css("top", "-"+height+"px");

                c_idx = (o_idx + 1) % count;

                $smt.eq(c_idx).css("display", "block");
                $smt.eq(c_idx).find("li.sct_li").each(function() {
                    $(this).delay(delay).animate(
                        { top: "+="+height+"px" }, settings.duration
                    );

                    delay += settings.delay;
                });

                o_idx = c_idx;
            }

            function set_interval() {
                if(count > 1) {
                    clear_interval();

                    if($("#btn_"+el_id).find("button.sctrl_stop").data("stop") == true)
                        return;

                    intervals[el_id] = setInterval(item_drop, settings.interval);

                    // control 버튼 class
                    $("#btn_"+el_id).find("button span").removeClass("sctrl_on").html("")
                        .end().find("button.sctrl_play span").addClass("sctrl_on").html("<b class=\"sound_only\">선택됨</b>");
                }
            }

            function clear_interval() {
                if(intervals[el_id]) {
                    clearInterval(intervals[el_id]);

                    // control 버튼 class
                    $("#btn_"+el_id).find("button span").removeClass("sctrl_on").html("")
                        .end().find("button.sctrl_stop span").addClass("sctrl_on").html("<b class=\"sound_only\">선택됨</b>");
                }
            }
        },
        stop: function()
        {
            var el_id = this[0].id;
            if(intervals[el_id])
                clearInterval(intervals[el_id]);
        }
    };

    $.fn.itemDrop = function(option) {
        if (methods[option])
            return methods[option].apply(this, Array.prototype.slice.call(arguments, 1));
        else
            return methods.init.apply(this, arguments);
    }
}(jQuery));

$(function() {
    $("#smt_<?php echo $this->type; ?>").itemDrop();
    // 기본 설정값을 변경하려면 아래처럼 사용
    //$("#smt_<?php echo $this->type; ?>").itemDrop({ interval: 6000, duration: 800, delay: 300 });

    // 애니메이션 play
    $("#btn_smt_<?php echo $this->type; ?> button.sctrl_play").on("click", function() {
        $("#btn_smt_<?php echo $this->type; ?> button.sctrl_stop").data("stop", false);

        var id = $(this).closest(".sctrl").attr("id").replace("btn_", "");
        $("#"+id).itemDrop();
        //$("#"+id).itemDrop({ interval: 3000, duration: 800, delay: 300 });
    });

    // 애니메이션 stop
    $("#btn_smt_<?php echo $this->type; ?> button.sctrl_stop").on("click", function() {
        if($(this).parent().siblings().find(".sctrl_on").size() > 0) {
            $(this).parent().siblings().find("span").removeClass("sctrl_on").html("");
            $(this).children().addClass("sctrl_on").html("<b class=\"sound_only\">선택됨</b>");
            var id = $(this).closest(".sctrl").attr("id").replace("btn_", "");
            $("#"+id).itemDrop("stop");

            $(this).data("stop", true);
        }
    });
});
</script>
<!-- } 상품진열 50 끝 -->