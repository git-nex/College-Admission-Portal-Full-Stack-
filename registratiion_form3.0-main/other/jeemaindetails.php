
<?php

include("config.php");

if(isset($_POST['submit']))
{
    $allotmentround = $_POST['allotmentround'];
    $rollno = $_POST['rollno'];
    $air = $_POST['air'];
    $mark = $_POST['mark'];
    $score = $_POST['score'];
    $year = $_POST['year'];
    $allotmentcategory = $_POST['allotmentcategory'];
    $candidatecategory = $_POST['candidatecategory'];
    

    

    $result = mysqli_query($mysqli,"INSERT INTO jeemaindetails values('','$allotmentround','$rollno','$gender','$air','$mark','$score','$year','$allotmentcategory','$candidatecategory')");

    echo $air;

    $res = mysqli_query()

  


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