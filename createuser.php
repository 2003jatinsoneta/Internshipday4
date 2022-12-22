<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
</head>
<body>
  <h2>Welcome To GFG</h2>
  <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
     
 

      <label for="username">Username </label><br>
    <input type="text" name="username" id="username"><br>
    <label for="password">Password </label><br>
    <input type="password" name="password" id="password"><br>
<button class ="button" name="submit" type="submit">Submit</button>
 </form>
</body>
</html>
<?php



if(isset($_POST['submit']))
{
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
}
?>