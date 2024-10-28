<?php
include 'connection.php';
session_start();

$pass = $_POST['password'];
$uname =$_POST['username'];
$phone =$_POST['username'];

$sql1 = "SELECT * FROM register WHERE username='$uname' OR phnum='$phone'";
$result1 = mysqli_query($conn, $sql1);
$res1 = mysqli_num_rows($result1);
if ($res1 == 0) {
    echo "<script>alert('User Not exists or incorrect');
    document.location='http://localhost/ap/pro/log.html'</script>";
}

$sql = "SELECT * FROM register WHERE password='$pass'";
$result = mysqli_query($conn, $sql);
$res = mysqli_num_rows($result);
if ($res > 0) {
    echo "<script>document.location='http://localhost/ap/pro/Homepage1.php'</script>";
} else {
    echo "<script>alert('Incorrect Password');
    document.location='http://localhost/ap/pro/log.html'</script>";
}
?>
