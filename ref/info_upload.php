<?php
	include("../ref/mysql_connect.php");
	include("../ref/func.php");
	mysqli_query($link, 'set names utf8');
	$row;
	if($result = mysqli_query($link, "INSERT INTO home (time, title, text, pic, cata, date) VALUES 
		('".date('Y-m-d H:i:s')."', '".$_POST['title']."', '".$_POST['text']."', '".$_POST['pic']."', '".$_POST['cata']."', '".date('Y-m-d')."')")){                               
		$html = 'true';
	}else{
		$html = 'false';
	}
	mysqli_close($link);
	echo $html;	
?>