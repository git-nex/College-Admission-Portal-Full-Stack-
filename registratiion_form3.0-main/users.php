

<?php
include("config.php");


if(isset($_POST['submit']))
{

    echo "Lala";

    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli,"INSERT INTO users( FirstName , LastName , username , password) VALUES ('$FirstName','$LastName','$username','$password')");

    


     $query1 = mysqli_query($mysqli,$result);
 
   
 
 $main_result = mysqli_commit($mysqli);

    if($main_result)
    {
        header('Location: index.php');
    }


   // echo $amount2;



}






?>


