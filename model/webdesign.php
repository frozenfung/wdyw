<?php
	include("../ref/mysql_connect.php");
	include("../ref/func.php");
	mysqli_query($link, 'set names utf8');
	$row;
	if($result = mysqli_query($link, "SELECT * FROM webdesign ORDER BY time DESC")){
		$row_number = mysqli_num_rows($result);
		$info = array();
		while($row = mysqli_fetch_array($result)){
			$info[] = array($row['pic'], $row['title'], $row['context'], $row['href'], $row['number']);
		}
	}
	mysqli_close($link);
	$html = render('../view/webdesign_view.php', $info);
	echo $html;
?>