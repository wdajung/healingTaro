<style type="text/css">

.togglelm{
	width:85px;
	height:450px;
	position:absolute;
	right:-85px;
	top:0px;
	z-index:9992;
	cursor:pointer;
}

.left_fixed_menu{
	position:fixed;
	left:-760px; 
	top:200px;
	width:760px; 
	height:450px;
	z-index:9992;
	-webkit-transition: all .4s ease-in-out;
	-o-transition: all .4s ease-in-out;
	transition: all .4s ease-in-out;

}

/*우측토글버튼 클릭시
.left_fixed_menu_on{
	left:0px;
	-webkit-transition: all .4s ease-in-out;
	-o-transition: all .4s ease-in-out;
	transition: all .4s ease-in-out;
} */


</style>

<div class="left_fixed_menu">
	<div class="togglelm">
		<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=teahcer"><img src="<?php echo G5_URL?>/img/q01.png" width="100%" class="main_effect"></a>
		<a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online"><img src="<?php echo G5_URL?>/img/q02.png" width="100%" class="main_effect"></a>
		<a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online2"><img src="<?php echo G5_URL?>/img/q03.png" width="100%" class="main_effect"></a>
		<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=news"><img src="<?php echo G5_URL?>/img/q04.png" width="100%" class="main_effect"></a>
		<a href="tel:1600-3070"><img src="<?php echo G5_URL?>/img/q05.png" width="100%" class="main_effect"></a>
	</div>
	<div>
	<?php echo display_banner('왼쪽고정');?>
	</div>
</div>




<script type="text/javascript">

$(document ).ready( function(){
	$(".togglelm" ).click( function(){
		$('.left_fixed_menu' ).toggleClass( 'left_fixed_menu_on' );
	});
});

</script>

