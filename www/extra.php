<?php 
include("common.php");
//여분필드추가시 wr_번호 
//시작할번호 wr_추가시작할 번호 
$af = 11; 
//마지막번호 생성할 마지막번호+1 
$bf = 21; 
for ($di=$af; $di<$bf; $di++) { 
	$g5memoup ="ALTER TABLE g5_write_apply ADD wr_{$di} VARCHAR(255) NOT NULL"; 
	$resultup = sql_query($g5memoup) or mysql_error(); 
	if ($resultup) { 
	 echo "$bo_table 게시판에 wr_{$di} 필드생성 성공 하였습니다.<br><br>"; 
	} else { 
		  echo "$bo_table 게시판에 wr_{$di} 필드가 이미 존재 하거나 생성실패.<br><br>"; 
	 } 
 } 

?>