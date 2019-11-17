<?php
session_start();

      date_default_timezone_set('Asia/Jakarta');
    
 if(!isset($_SESSION['username']) && !isset($_COOKIE["playername"])) {
	header("location: welcome");

} else if(!isset($_SESSION['username']) && isset($_COOKIE["playername"])) {
	   $_SESSION["id_user"] = $_COOKIE["playerid"];
      	   $_SESSION["username"] = $_COOKIE["playername"];
} else {

$from = $_SESSION['id_user'];
      $getTime = date('Y-m-d H:i');
	$update = mysqli_query($conn, "UPDATE users SET online='$getTime' WHERE id_user='$from'");
}

?>