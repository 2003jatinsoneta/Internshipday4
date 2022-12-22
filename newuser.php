<?php
session_start();

$conn = mysqli_connect("localhost","root","","newuser","3306");
if(!$conn){
    echo"Cannot connect to database".mysqli_connect_error($conn);
    exit;
}
$username = $_POST['username'];
$password = $_POST['password'];
$query = "Select username,password from user2 where username='$username';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
print_r($row);
if(!$row){
echo "<script>
alert('Empty data');
window.location.href = 'login.html';
</script>;";
}
 else if($username != $row['username'] OR $password != $row['password']){
    echo"<script>
    alert('Username or password mismatch.Do agaiin');
    window.location.href = 'login.html';
    </script>";
}
 else if($username == $row['username'] AND $password == $row['password']){
    $_SESSION['user']=$username;
    echo"<script>alert('Registered Successfully!');
                window.location.replace('index.php');
                </script>;";

}




?>