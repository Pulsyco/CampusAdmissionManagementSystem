<?php
$con = mysqli_connect("localhost", "root", "");
$a = $_POST['aid'];
$b = $_POST['psw'];
mysqli_select_db($con, "set1");

$sq = "SELECT * FROM std WHERE appid='$a' AND password='$b'";
$res1 = mysqli_query($con, $sq);
$count = mysqli_num_rows($res1);

if ($count == 1) {
    session_start();
    $_SESSION['Name'] = $a;
    header("location: php3.php");
} else {
    echo "INVALID CREDENTIALS";
}
?>
