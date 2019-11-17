<?php
session_start();
session_destroy();

if(isset($_COOKIE["playerid"]) && isset($_COOKIE["playername"])){
		setcookie("playerid", '', time() - (3600));
		setcookie("playername", '', time() - (3600));
	}
	
header("location: welcome");
?>