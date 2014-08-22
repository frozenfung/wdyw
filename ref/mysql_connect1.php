<?
	$link = mysqli_connect("localhost", "root", "root", "wdyw");
	if(!$link){
		mysqli_connect_error();
		exit();
	}
	echo "111";
?>