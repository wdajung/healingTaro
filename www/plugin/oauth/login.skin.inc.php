<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if((defined('G5_NAVER_OAUTH_CLIENT_ID') && G5_NAVER_OAUTH_CLIENT_ID) || (defined('G5_KAKAO_OAUTH_REST_API_KEY') && G5_KAKAO_OAUTH_REST_API_KEY) || (defined('G5_FACEBOOK_CLIENT_ID') && G5_FACEBOOK_CLIENT_ID) || (defined('G5_GOOGLE_CLIENT_ID') && G5_GOOGLE_CLIENT_ID)) {

add_stylesheet('<link rel="stylesheet" href="'.G5_PLUGIN_URL.'/oauth/style.css">', 10);
add_javascript('<script src="'.G5_PLUGIN_URL.'/oauth/jquery.oauth.login.js"></script>', 10);

$social_oauth_url = G5_PLUGIN_URL.'/oauth/login.php?service=';
?>

<div class="<?php echo (G5_IS_MOBILE ? 'm-' : ''); ?>login-sns sns-wrap-32 sns-wrap-over">
    <div class="sns-wrap" style="padding:10px;">
			<table width="100%" cellpadding="5" cellspacing="5" border="0">
				<tr>
					<?php if(defined('G5_NAVER_OAUTH_CLIENT_ID') && G5_NAVER_OAUTH_CLIENT_ID) { ?>
					<td width="50%">
						<a href="<?php echo $social_oauth_url.'naver'; ?>" target="_blank" class="sns-icon social_oauth sns-naver">
							<img src="<?php echo G5_IMG_URL?>/btn_login_nv.png" width="100%">
						</a>
					</td>
					<?}?>
					<?php if(defined('G5_FACEBOOK_CLIENT_ID') && G5_FACEBOOK_CLIENT_ID) { ?>
					<td width="50%">
						<a href="<?php echo $social_oauth_url.'facebook'; ?>" target="_blank" class="sns-icon social_oauth sns-fb">
							<img src="<?php echo G5_IMG_URL?>/btn_login_fb.png" width="100%">
						</a>
					</td>
					<?}?>
				</tr>
			</table>
        <!--<?php if(defined('G5_NAVER_OAUTH_CLIENT_ID') && G5_NAVER_OAUTH_CLIENT_ID) { ?>
        <a href="<?php echo $social_oauth_url.'naver'; ?>" target="_blank" class="sns-icon social_oauth sns-naver">
		<span class="ico"></span><span class="txt">네이버 로그인</span></a>
        <?php } ?>
        <?php if(defined('G5_KAKAO_OAUTH_REST_API_KEY') && G5_KAKAO_OAUTH_REST_API_KEY) { ?>
        <a href="<?php echo $social_oauth_url.'kakao'; ?>" target="_blank" class="sns-icon social_oauth sns-kk"><span class="ico"></span><span class="txt">카카오 로그인</span></a>
        <?php } ?>
        <?php if(defined('G5_FACEBOOK_CLIENT_ID') && G5_FACEBOOK_CLIENT_ID) { ?>
        <a href="<?php echo $social_oauth_url.'facebook'; ?>" target="_blank" class="sns-icon social_oauth sns-fb"><span class="ico"></span><span class="txt">페이스북 로그인</span></a>
        <?php } ?>
        <?php if(defined('G5_GOOGLE_CLIENT_ID') && G5_GOOGLE_CLIENT_ID) { ?>
        <a href="<?php echo $social_oauth_url.'google'; ?>" target="_blank" class="sns-icon social_oauth sns-gg"><span class="ico"></span><span class="txt">구글 로그인</span></a>
        <?php } ?>-->
    </div>
</div>
<?php
}
?>