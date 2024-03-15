<?php
$con = mysqli_connect("localhost", "root", "");
$a = $_POST['aname'];
$b = $_POST['passk'];
mysqli_select_db($con, "set1");

$sq = "SELECT * FROM admin WHERE adminname='$a' AND pass='$b'";
$res1 = mysqli_query($con, $sq);
$count = mysqli_num_rows($res1);

if ($count == 1) {
    session_start();
    $_SESSION['Name'] = $a;
    header("location: php4.php");
} else {
    echo "INVALID CREDENTIALS";
}
?>
