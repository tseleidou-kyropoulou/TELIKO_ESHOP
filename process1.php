<?php


$connect= new mysqli('localhost', 'managers','123456789', 'login') or die(mysql_error());


	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql="SELECT onoma FROM login WHERE onoma='$username' AND kwdikos='$password'";
	
	$result= $connect->query($sql);
	
	
	
	if($result-> num_rows > 0 ){
		
		while($row= $result->fetch_assoc()){
			
			echo "<br>Welcome " . $row["name"];
		}
		
	}else{
		echo "<br>Username and password don't match";
	}
		
	

?>