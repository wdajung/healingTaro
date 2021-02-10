<style>
/*우측고정메뉴*/
.right_fixed_menu{
	position:fixed; 
	display:block; 
	z-index:9990; 
	right:0px; 
	top:0px; 
	width:170px; 
	height:100%; 
	background:#fff; 
	border-left:1px solid #ccc; 
	font-family:"Nanum Gothic";
	-webkit-transition: all .4s ease-in-out;
	-o-transition: all .4s ease-in-out;
	transition: all .4s ease-in-out;
}
.right_fixed_menu_inner{
	top:0px;
	right:0px;
	z-index:9991;
	position:absolute;
	width:170px;
	overflow:hidden;
}

/*우측고정메뉴 토글버튼*/
.togglem{
	width:40px;
	height:40px;
	position:absolute;
	left:-35px;
	top:205px;
	z-index:9992;
	cursor:pointer;
}
.right_fixed_menu_on{/*우측토글버튼 클릭시*/
	right:-170px;
	-webkit-transition: all .4s ease-in-out;
	-o-transition: all .4s ease-in-out;
	transition: all .4s ease-in-out;
}
</style>
<!--우측고정메뉴--->
<div class="right_fixed_menu">
	<div class="togglem"><img src="<?php echo G5_URL?>/img/toggle.png" width="100%"></div>
	<div class="right_fixed_menu_inner">
		<div style="padding-top:15px;">
			<div style="padding:20px 15px;color:#aaa;text-align:center;border-bottom:1px solid #eeeeee;">
				<div>
					<b>WELCOME TO</b><br><br>
					<b>씨투 선글라스에<br>오신 것을 환영합니다.<br><br>
				</div>
				<div style="background:#bf0a04;padding:7px;margin-bottom:20px;color:#fff;font-size:0.9em;">
					회원가입시<br>20,000원 쿠폰발급
				</div>
				<div>
					<?if($is_member){?>
						<a href="<?php echo G5_URL?>/bbs/logout.php" style="color:#aaa;border:1px solid #aaa;padding:3px;">LOGOUT</a>					
					<?}else{?> 
						<a href="<?php echo G5_URL?>/bbs/login.php" style="color:#aaa;border:1px solid #aaa;padding:3px;">LOGIN</a>
					<?}?>
					<a href="<?php echo G5_URL?>/bbs/register.php" style="color:#aaa;border:1px solid #aaa;padding:3px;">JOIN</a>
				</div>
			</div>
			<div style="padding:10px;text-align:center;border-bottom:1px solid #eeeeee;">
				<a href="#" id="favorite" title="즐겨찾기 등록"><b style="color:#aaa;">+ 즐겨찾기 등록</b></a> 
			</div>
			<div style="border-bottom:1px solid #eee;padding:15px 10px;text-align:center;">
				<b>Quick Menu</b><br><br>
				<table cellpadding="5" cellspacing="0">
					<tr>
						<td style="background:#eee;">
							<a href="<?php echo G5_SHOP_URL?>/cart.php">
								<img src="<?php echo G5_URL?>/img/r_cart_btn.png" width="85%" alt="장바구니">
							</a>
						</td>
						<td style="background:#ddd;">
							<a href="<?php echo G5_SHOP_URL?>/mypage.php">
								<img src="<?php echo G5_URL?>/img/r_my_btn.png" width="85%" alt="마이페이지">
							</a>
						</td>
					</tr>
					<tr>
						<td style="background:#ddd;">
							<a href="http://www.seeto.kr/bbs/board.php?bo_table=notice&wr_id=8">
								<img src="<?php echo G5_URL?>/img/r_card_btn.png" width="85%" alt="무이자할부">
							</a>
						</td>
						<td style="background:#eee;">
							<a href="<?php echo G5_SHOP_URL?>/orderinquiry.php">
								<img src="<?php echo G5_URL?>/img/r_order_btn.png" width="85%" alt="주문배송">
							</a>
						</td>
					</tr>
					<tr>
						<td style="background:#eee;">
							<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=qa">
								<img src="<?php echo G5_URL?>/img/r_qna_btn.png" width="85%" alt="고객센터">
							</a>
						</td>
						<td style="background:#ddd;">
							<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa&sca=%EB%B0%A9%EB%AC%B8%EC%98%88%EC%95%BD">
								<img src="<?php echo G5_URL?>/img/r_book_btn.png" width="85%" alt="매장방문예약">
							</a>
						</td>
					</tr>
				</table>				
			</div>
			<div>
			<?php include(G5_SHOP_SKIN_PATH.'/boxtodayview.skin.php'); // 오늘 본 상품 ?>
			</div>
			<div style="padding:15px;">
				<a href="http://plus.kakao.com/home/oax0wmkh" target="_blank" style="display:block;width:50%;float:left">
					<img src="<?php echo G5_URL?>/img/r_kakao_btn.png" width="100%">
				</a>
				<a href="http://talk.naver.com/WCCNRI" target="_blank" style="display:block;width:50%;float:left">
					<img src="<?php echo G5_URL?>/img/r_tt_btn.png" width="100%">
				</a>
				<div style="clear:both"></div>
			</div>			
			<div style="padding:15px;text-align:center;">
				<a href="https://www.instagram.com/seeto8578/ " style="padding:4px" target="_blank">
					<img src="<?php echo G5_URL?>/img/sns_insta2.png" width="28px">
				</a>
				<a href="https://www.facebook.com/profile.php?id=100015170761179" style="padding:4px" target="_blank">
					<img src="<?php echo G5_URL?>/img/sns_fb2.png" width="28px">
				</a>
				<a href="http://blog.naver.com/seeto11" style="padding:4px" target="_blank">
					<img src="<?php echo G5_URL?>/img/sns_blog2.png" width="28px">
				</a>
			</div>
			<div style="text-align:center;">
				<img src="<?php echo G5_IMG_URL?>/code.png" width="90px;">
			</div>
			<div style="padding:15px;text-align:center;">
				<a style="text-align:center; border:1px solid #eee; border-top:2px solid #c00b02; padding:5px 10px; color:#aaa; cursor:pointer;text-decoration:none" id="top_btn">
					 ▲ TOP
				</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document ).ready( function(){/*우측고정메뉴 토글*/
	$(".togglem" ).click( function(){
		$('.right_fixed_menu' ).toggleClass( 'right_fixed_menu_on' );
	});
});
</script>