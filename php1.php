<html>
<?php
$con1 = mysqli_connect("localhost", "root", "");
if (!$con1) {
    echo "Connection failed: " . mysqli_connect_error();
}

mysqli_select_db($con1, "set1");

$res = mysqli_query($con1, "SELECT * FROM std");

$a = $_POST['sname'];
$b = $_POST['fname'];
$c = $_POST['mname'];
$d = $_POST['DOB'];
$e = $_POST['gender'];
$f = $_POST['address'];
$g = $_POST['appid'];
$h = $_POST['password'];
$i = $_POST['repassword'];
$j = $_POST['course'];
$k = $_POST['marks1'];
$l = $_POST['marks2'];
$m = $_POST['jee'];
$n = 'Pending..';
$o='---';

$sq = "SELECT * FROM std WHERE appid='$g';";
$res1 = mysqli_query($con1, $sq);
$count = mysqli_num_rows($res1);

if ($count == 0) {
    if ($h != $i || $a == NULL || $b == NULL || $c == NULL || $d == NULL || $e == NULL || $f == NULL || $g == NULL || $h == NULL || $i == NULL || $j == NULL || $k == NULL || $l == NULL || $m == NULL) {
        echo '<script type="text/javascript">';
        echo 'alert("Review your entries");';
        echo 'window.location.href = "index6.html";';
        echo '</script>';
    } else {
        $in = "INSERT INTO std VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')";
        $res1 = mysqli_query($con1, $in);
        if ($in) {
            header("Location:index9.html");
        } else {
            echo "Enter Valid Details";
            header("Location:index6.html");
        }
    }
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Application id not valid");';
    echo 'window.location.href = "index6.html";';
    echo '</script>';
}

?>
</html>
