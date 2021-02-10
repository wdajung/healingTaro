<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

function get_mshop_category($ca_id, $len)
{
    global $g5;

    $sql = " select ca_id, ca_name from {$g5['g5_shop_category_table']}
                where ca_use = '1' ";
    if($ca_id)
        $sql .= " and ca_id like '$ca_id%' ";
    $sql .= " and length(ca_id) = '$len' order by ca_order, ca_id ";

    return $sql;
}
?>
<style>
/*responsive tab box*/
div.tabBox {width:100%;float:left;overflow: visible;}
div.tabBox h3 {padding:20px 0px;}
ul.tabs {margin: 0;padding: 0;float: left;list-style: none;height: 32px; width:99.9%;}
ul.tabs li {float: left;margin: 0;padding: 0;height: 32px; line-height: 32px; margin-bottom: -1px; overflow: idden;position: relative;}
ul.tabs li a {display: block;padding: 0 5px;outline: none;background:none;}
.tabContainer {border-top: none;overflow: hidden;clear: both;float: left;width:99.9%; margin-bottom:10px;}
.tabContent {padding: 0px;}
.tabContent h3 {padding:0px;}

/**** TABS STYLES ****/
ul.tabs {border-top-left-radius:5px;-moz-border-top-left-radius:5px;-webkit-border-top-left-radius:5px;}
ul.tabs li {border-top:1px solid #ccc; border-bottom:1px solid #ccc; width:50%;}
ul.tabs li a {background:#eee;text-decoration: none;font-size: 11px;color: #000;outline: none;border: 1px solid ccc;border-left: none;}
ul.tabs li a:hover {background: #eee;}
ul.tabs li.active {border-bottom:1px solid #fff;}
ul.tabs li.active a, ul.tabs li.active a:hover  {background: #fff;}
div.tabContainer {border:1px solid #ccc; background:#fff;}

.tab2_ul{list-style:none; display:none;}
.tab2_ul li{text-indent:14px; background:#fafafa; border-top:1px solid #e9e9e9; font-weight:normal; width:100%; padding:9px 0 9px; text-align:left;}
.tab2_ul li a{color:#545454; display:block; text-overflow:ellipsis; white_space:nowrap; padding-right:30px;}


</style>
<button type="button" id="hd_ct">분류</button>
<div id="category">
    <div class="ct_wr">
		<div style="padding:10px 0;"><img src="<?php echo G5_URL?>/img/logo.png" width="25%"></div>
		<!--<table width="100%" cellpadding="5" cellspacing="5" border="0">
			<tr>
				<td width="50%">
					<?if($is_member){?>
					<a href="<?php echo G5_URL?>/bbs/logout.php">LOGOUT</a>
					<?}else{?>
					<a href="<?php echo G5_URL?>/bbs/login.php">LOGIN</a>
					<?}?>
				</td>
				<td width="50%"><a class="favi" href="naversearchapp://addshortcut?url=<?=G5_URL?>&icon=<?=G5_URL?>/img/webstore.png&title=Seeto&serviceCode=nstore&version=7">즐겨찾기</a></td>
			</tr>
		</table>-->
			<div id="tab1" class="tabContent">
				<ul class="cate">
					<li><a href="<?php echo G5_URL?>/sub1.php">생크림소개</a></li>
					<li><a href="<?php echo G5_URL?>/sub2.php">프로그램</a></li>
					<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=teahcer">교육문의</a></li>
					<li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online">교육상담신청</a></li>
					<li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online2">교사지원</a></li>
					<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery">갤러리</a></li>
					<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">커뮤니티</a></li>
					<li><a href="<?php echo G5_URL?>/shop/list.php?ca_id=20">수업신청</a></li>
					<li><a href="<?php echo G5_URL?>/shop/list.php?ca_id=10">교재신청</a></li>
				</ul>
			</div>
			
		<!--
		<div>
			<div class="tabBox">
				<ul class="tabs">
					<li><a href="#tab1">카테고리</a></li>
					<li><a href="#tab2">커뮤니티</a></li>
				</ul>
			</div>
		</div> -->
		<div class="tabContainer">
			<div id="tab1" class="tabContent">
				<?php
					$mshop_ca_href = G5_SHOP_URL.'/list.php?ca_id=';
					$mshop_ca_res1 = sql_query(get_mshop_category('', 2));
					for($i=0; $mshop_ca_row1=sql_fetch_array($mshop_ca_res1); $i++) {
						if($i == 0)
							echo '<ul class="cate">'.PHP_EOL;
					?>
						<li>
							<!--<a href="<?php echo $mshop_ca_href.$mshop_ca_row1['ca_id']; ?>"><?php echo get_text($mshop_ca_row1['ca_name']); ?></a>-->
							<?php
							$mshop_ca_res2 = sql_query(get_mshop_category($mshop_ca_row1['ca_id'], 4));
							if(sql_num_rows($mshop_ca_res2))
								/*
								echo '<button class="sub_ct_toggle ct_op">'.get_text($mshop_ca_row1['ca_name']).' 하위분류 열기</button>'.PHP_EOL;
								*/

							for($j=0; $mshop_ca_row2=sql_fetch_array($mshop_ca_res2); $j++) {
								if($j == 0)
									echo '<ul class="sub_cate sub_cate1">'.PHP_EOL;
							?>
								<li>
									<a href="<?php echo $mshop_ca_href.$mshop_ca_row2['ca_id']; ?>">- <?php echo get_text($mshop_ca_row2['ca_name']); ?></a>
									<?php
									$mshop_ca_res3 = sql_query(get_mshop_category($mshop_ca_row2['ca_id'], 6));
									if(sql_num_rows($mshop_ca_res3))
										echo '<button type="button" class="sub_ct_toggle ct_op">'.get_text($mshop_ca_row2['ca_name']).' 하위분류 열기</button>'.PHP_EOL;

									for($k=0; $mshop_ca_row3=sql_fetch_array($mshop_ca_res3); $k++) {
										if($k == 0)
											echo '<ul class="sub_cate sub_cate2">'.PHP_EOL;
									?>
										<li>
											<a href="<?php echo $mshop_ca_href.$mshop_ca_row3['ca_id']; ?>">- <?php echo get_text($mshop_ca_row3['ca_name']); ?></a>
											<?php
											$mshop_ca_res4 = sql_query(get_mshop_category($mshop_ca_row3['ca_id'], 8));
											if(sql_num_rows($mshop_ca_res4))
												echo '<button type="button" class="sub_ct_toggle ct_op">'.get_text($mshop_ca_row3['ca_name']).' 하위분류 열기</button>'.PHP_EOL;

											for($m=0; $mshop_ca_row4=sql_fetch_array($mshop_ca_res4); $m++) {
												if($m == 0)
													echo '<ul class="sub_cate sub_cate3">'.PHP_EOL;
											?>
												<li>
													<a href="<?php echo $mshop_ca_href.$mshop_ca_row4['ca_id']; ?>">- <?php echo get_text($mshop_ca_row4['ca_name']); ?></a>
													<?php
													$mshop_ca_res5 = sql_query(get_mshop_category($mshop_ca_row4['ca_id'], 10));
													if(sql_num_rows($mshop_ca_res5))
														echo '<button type="button" class="sub_ct_toggle ct_op">'.get_text($mshop_ca_row4['ca_name']).' 하위분류 열기</button>'.PHP_EOL;

													for($n=0; $mshop_ca_row5=sql_fetch_array($mshop_ca_res5); $n++) {
														if($n == 0)
															echo '<ul class="sub_cate sub_cate4">'.PHP_EOL;
													?>
														<li>
															<a href="<?php echo $mshop_ca_href.$mshop_ca_row5['ca_id']; ?>">- <?php echo get_text($mshop_ca_row5['ca_name']); ?></a>
														</li>
													<?php
													}

													if($n > 0)
														echo '</ul>'.PHP_EOL;
													?>
												</li>
											<?php
											}

											if($m > 0)
												echo '</ul>'.PHP_EOL;
											?>
										</li>
									<?php
									}

									if($k > 0)
										echo '</ul>'.PHP_EOL;
									?>
								</li>
							<?php
							}

							if($j > 0)
								echo '</ul>'.PHP_EOL;
							?>
						</li>
					<?php
					}


					if($i > 0)
						echo '</ul>'.PHP_EOL;
					else
						echo '<p>등록된 분류가 없습니다.</p>'.PHP_EOL;
					?>
			</div>
			<div id="tab2" class="tabContent">
				<ul class="tab2_ul">
					<li class="tab2_li">
						<a href="#">- 브랜드보기</a>
					</li>
					<li>
						<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery">- LOOKBOOK</a>
					</li>
					<li>
						<a href="<?php echo G5_SHOP_URL?>/listtype.php?type=3">- NEW</a>
					</li>
					<li>
						<a href="<?php echo G5_SHOP_URL?>/listtype.php?type=5">- SALE</a>
					</li>
					<li>
						<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=event">- EVENT</a>
					</li>
					<li>
						<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=review">- REVIEWS</a>
					</li>
					<li>
						<a href="<?php echo G5_SHOP_URL?>/orderinquiry.php">- 주문배송</a>
					</li>
					<li>
						<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">- 고객센터</a>
					</li>
					<li>
						<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa&sca=방문예약">- 방문예약</a>
					</li>
					<li>
						<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">- 공지사항</a>
					</li>
				</ul>
			</div>
		</div>
   
		<!--<div style="margin:5px 0 5px 0; border:1px solid #e9e9e9;">
			<table width="100%" cellpadding="5" cellspacing="5">
				<tr>
					<td width="33.333%" align="center">
						<a href="#">
							<img src="<?php echo G5_URL?>/img/sns_insta.png" onclick="alert('준비중입니다'); return false;" width="60%" style="background:#e0e0e0; border-radius:10px;">
						</a>
					</td>
					<td width="33.333%" align="center">
						<a href="#">
							<img src="<?php echo G5_URL?>/img/sns_fb.png" onclick="alert('준비중입니다'); return false;" width="60%" style="background:#e0e0e0; border-radius:10px;">
						</a>
					</td>
					<td width="33.333%" align="center">
						<a href="#">
							<img src="<?php echo G5_URL?>/img/sns_blog.png" onclick="alert('준비중입니다'); return false;" width="60%" style="background:#e0e0e0; border-radius:10px;">
						</a>
					</td>
				</tr>
			</table>
			<table width="100%" cellpadding="5" cellspacing="5" border="0">
				<tr>
					<td width="50%" align="right">
						<a href="#"><img src="<?php echo G5_URL?>/img/r_kakao_btn.png" onclick="alert('준비중입니다'); return false;" width="60%"></a>
					</td>
					<td width="50%" align="left">
						<a href="#"><img src="<?php echo G5_URL?>/img/r_tt_btn.png" onclick="alert('준비중입니다'); return false;" width="60%"></a>
					</td>
				</tr>
			</table>
		</div>-->
		<div style="margin:5px 0 5px 0;">
			<div>
				<font size="5px;">
					<img src="<?php echo G5_IMG_URL?>/call_btn2.png" width="23px;"><b style="color:#1e439a">1600-3070 </b>
				</font>
			</div>
			<div>
				<font color="#545454">
					COPYRIGHTⓒ생크림방문미술<br>
					ALL RIGHT RESERVED.
				</font>
			</div>
		</div>
        <button type="button" class="pop_close"><span class="sound_only">카테고리 </span>닫기</button>
    </div>
</div>

<script>
$(function (){
    var $category = $("#category");

    $("#hd_ct").on("click", function() {
        $category.css("display","block");
    });

    $("#category .pop_close").on("click", function(){
        $category.css("display","none");
    });

    $("button.sub_ct_toggle").on("click", function() {
        var $this = $(this);
        $sub_ul = $(this).closest("li").children("ul.sub_cate");

        if($sub_ul.size() > 0) {
            var txt = $this.text();

            if($sub_ul.is(":visible")) {
                txt = txt.replace(/닫기$/, "열기");
                $this
                    .removeClass("ct_cl")
                    .text(txt);
            } else {
                txt = txt.replace(/열기$/, "닫기");
                $this
                    .addClass("ct_cl")
                    .text(txt);
            }

            $sub_ul.toggle();
        }
    });
});
</script>
<script type="text/javascript">
/*tab box*/
$(".tabContent").hide(); 
$("ul.tabs li:first").addClass("active").show(); 
$(".tabContent:first").show(); 
$("ul.tabs li").click(function () {
	$("ul.tabs li").removeClass("active"); 
	$(this).addClass("active"); 
	$(".tabContent").hide(); 
	var activeTab = $(this).find("a").attr("href"); 
	$(activeTab).fadeIn(); 
	return false;
});
</script>
