<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$sql = "  select * from `{$g5['g5_shop_item_use_table']}` a join `{$g5['g5_shop_item_table']}` b on (a.it_id=b.it_id) where a.is_confirm = '1' order by a.is_id desc limit 0, 10 ";
$result = sql_query($sql);
?>

<div id="sps" style=" width:100%'">

    <?php
    $thumbnail_width = 500;

    for ($i=0; $row=sql_fetch_array($result); $i++)
    {

        $star = get_star($row['is_score']);
        $is_content = get_view_thumbnail($row['is_content'], $thumbnail_width);

        $row2 = sql_fetch(" select it_name from {$g5['g5_shop_item_table']} where it_id = '{$row['it_id']}' ");
        $it_href = G5_SHOP_URL."/item.php?it_id={$row['it_id']}";

        if ($i == 0) echo '<ul>';
    ?>
    
    <li>

        <div class="sps_img">
            <a href="<?php echo $it_href; ?>">
                <?php echo get_itemuselist_thumbnail($row['it_id'], $row['is_content'], 70, 70); ?>
                <span><?php echo $row2['it_name']; ?></span>
            </a>
        </div>

        <section class="sps_section">
            <h2><?php echo $row['is_subject']; ?></h2>

            <dl class="sps_dl">
                <dt>작성자</dt>
                <dd><?php echo $row['is_name']; ?></dd>
                <dt>작성일</dt>
                <dd><?php echo substr($row['is_time'],0,10); ?></dd>
                <dt>평가점수</dt>
                <dd><img src="<?php echo G5_URL; ?>/shop/img/s_star<?php echo $star; ?>.png" alt="별<?php echo $star; ?>개"></dd>
            </dl>

            <div id="sps_con_<?php echo $i; ?>" style="display:none;">
                <?php echo $is_content; // 사용후기 내용 ?>
            </div>

            <div class="sps_con_btn"><button class="sps_con_<?php echo $i; ?>">보기</button></div>
        </section>

    </li>
    <?php }
    if ($i > 0) echo '</ul>';
    if ($i == 0) echo '<p id="sps_empty">자료가 없습니다.</p>';
    ?>
</div>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<script>
$(function(){
    // 사용후기 더보기
    $(".sps_con_btn button").click(function(){
        var $con = $(this).parent().prev();
        if($con.is(":visible")) {
            $con.slideUp();
            $(this).text("보기");
        } else {
            $(".sps_con_btn button").text("보기");
            $("div[id^=sps_con]:visible").hide();
            $con.slideDown(
                function() {
                    // 이미지 리사이즈
                    $con.viewimageresize2();
                }
            );
            $(this).text("닫기");
        }
    });
});
</script>