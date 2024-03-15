<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "set1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

mysqli_select_db($conn, "set1");

session_start();
if (isset($_SESSION['Name'])) {
    echo $_SESSION['Name'] ;
 }

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_POST['appid'];
$b=$_POST['fee'];

if($_SESSION['Name']!=$a){
    echo '<script type="text/javascript">';
        echo 'alert("invalid applicant id");';
        echo 'window.location.href = "index11.html";';
        echo '</script>';
}
else{
$sql = "UPDATE std SET fee='$b' WHERE appid='$a';";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
        echo 'alert("Review your entries");';
        echo 'window.location.href = "php3.php";';
        echo '</script>';
} else {
    echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>
