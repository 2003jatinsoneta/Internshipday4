<?php

$conn = mysqli_connect("localhost","root","","project_php","3306");
if(!$conn){
    echo"Cannot connect to database".mysqli_connect_error($conn);
    exit;
}
$username = $_POST['username'];
$password = $_POST['password'];
$query = "Insert into user(username,password) Values('$username','$password');";
$result = mysqli_query($conn, $query);
if(!$result)
{
    echo "Query issue".mysqli_connector_error($conn);

}
else{
    echo "<script>alert('Successfully registered');
    window.location.replace('index.php');
    </script>";
}

?>