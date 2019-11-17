  <?php
require('function/connect.php');
session_start();


if(isset($_POST['login'])){
$user = mysqli_real_escape_string($conn, $_POST['username']);
$pass = mysqli_real_escape_string($conn,$_POST['password']);
  
  $query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
  
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $count = mysqli_num_rows($result);
        if($count==1){
          $row = mysqli_fetch_array($result);
          $_SESSION["id_user"] = $row["id_user"]; 
      $_SESSION["username"] = $row["username"];

      //set up cookie
        setcookie("playerid", $row['id_user'], time()+7776000);
        setcookie("playername", $row['username'], time()+7776000);

      header("Location: home@" . $_SESSION['username']);
  } else {
      header("Location: error-login.php");
  } 
}
?>