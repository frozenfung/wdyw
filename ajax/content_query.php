<?
	include('../ref/mysql_connect.php');
	mysqli_query($link, 'set names utf8');
	$sql_query= "SELECT * FROM content_ WHERE date = '".$_POST['date']."'";
	if($result = @mysqli_query($link, $sql_query)){;
		$row = mysqli_fetch_array($result);
		echo $row['text'];
	}
	
?>