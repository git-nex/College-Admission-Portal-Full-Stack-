
<?php

include("config.php");

if(isset($_POST['submit']))
{
 
    $dd1 = $_POST['dd1'];
    $date1 = $_POST['date1'];
    $amount1 = $_POST['amount1'];
    $dd2 = $_POST['dd2'];
    $date2 = $_POST['date2'];
    $amount2 = $_POST['amount2'];
    $amount3 = $_POST['amount3'];
  
    

    


    $result = mysqli_query($mysqli,"INSERT INTO feesdetails values('','$dd1','$date1','$amount1','$dd2','$date2','$amount2','$amount3')");

   // echo $res;

   echo $dd2;


    if($result)
    {
        echo "Success !";
    }
    else
    {
        echo mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        echo "Failed !";
    }

}
else
{
    echo "error";
}

?>