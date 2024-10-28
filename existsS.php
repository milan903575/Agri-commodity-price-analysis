<?php
session_start();
include 'connection.php';

$uname=$_POST['username'];
$pass=$_POST['password'];
$phone=$_POST['phnum'];

$sql="SELECT * FROM register WHERE username='$uname' and password='$pass' ";
$result = mysqli_query($conn, $sql);
$res=mysqli_num_rows($result);
if($res>0)
{
 echo "<script>alert(' User exists. ');
 document.location='http://localhost/ap/pro/Log.html'</script>";
}

$sql1="SELECT * FROM register WHERE username='$uname' ";
$result1=mysqli_query($conn, $sql1);
$res1=mysqli_num_rows($result1);
if($res1>0)
{
 echo "<script>alert(' User name already exists.!! ');
 document.location='http://localhost/ap/pro/Log.html'</script>";
}
else
{
$sqli = "INSERT INTO register VALUES ('$uname','$phone','$pass')";
$resul=mysqli_query($conn, $sqli);
if ($conn->query($sqli)){
  header("LOCATION: log.html");
}
}
?>