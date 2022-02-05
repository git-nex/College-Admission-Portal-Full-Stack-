
<?php

include("config.php");

if(isset($_POST['submit']))
{

    $board1 = $_POST['board1'];
    $subject1 = $_POST['subject1'];
    $year1 = $_POST['year1'];
    $mark1 = $_POST['mark1'];
    $grade1 = $_POST['grade1'];
    $board2 = $_POST['board2'];
    $subject2 = $_POST['subject2'];
    $year2 = $_POST['year2'];
    $mark2 = $_POST['mark2'];
    $grade2 = $_POST['grade2'];




    $result = mysqli_query($mysqli,"INSERT INTO education values('','$board1','$subject1','$year1',' $mark1','$grade1','$board2','$subject2','$year2','$mark2','$grade2')");

    

   echo $mark1;


    if($result)
    {
        echo "Success !";
    }
    else
    {
        
        
        echo "Failed !";
    }

}
else
{
    echo "error";
}

?>