
<?php

session_start();

?>


<?php
include("config.php");


if(isset($_POST['submit']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";



 $result = mysqli_query($mysqli,$sql);

 if (mysqli_num_rows($result) === 1) 
 {

    $row = mysqli_fetch_assoc($result);

    if ($row['username'] === $username && $row['password'] === $password) 
    {

        echo "Logged in!";

        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("Location: demo.php");
        exit();
    }
    else
    {
        echo "No User found !";
    }
}
else
{
    echo "No record found !";
}




}
else
{
    echo "connection error";
}






?>
