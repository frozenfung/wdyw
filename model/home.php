<?php
	include '../ref/mysql_connect.php';
	include '../ref/func.php';
	
	mysqli_query($link, 'set names utf8');
	$row = array();
	
	if($result = mysqli_query($link, "SELECT * FROM home ORDER BY time DESC LIMIT 20")){
		$row_number = mysqli_num_rows($result);
		$info = array();
		while($row = mysqli_fetch_array($result)){
			$info[] = array($row['text'], $row['pic'], $row['cata'], $row['date'], $row['title']);
		}
	}else{
		echo "false";
	}
	mysqli_close($link);
	$html = render('../view/home_view.php', $info);
	echo $html;
?>