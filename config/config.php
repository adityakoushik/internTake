<?php 
	$con = mysql_connect('localhost','root','');
	$db = mysql_select_db('newtest',$con);
	if(!$con || !$db){
		die('Could Not Connected'.mysql_error());
	}
 ?>