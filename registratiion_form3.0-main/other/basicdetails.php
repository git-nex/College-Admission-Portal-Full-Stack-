
<?php

include("config.php");

if(isset($_POST['submit']))
{
    $englishname = $_POST['englishname'];
    $hindiname = $_POST['hindiname'];
    $gender = $_POST['gender'];
    $bloodgroup = $_POST['bloodgroup'];
    $dob = $_POST['dob'];
    $mob1 = $_POST['mob1'];
    $mob2 = $_POST['mob2'];
    $email = $_POST['email'];
    $aadhaar = $_POST['aadhaar'];
    $fathername = $_POST['fathername'];
    $fatheroccupation = $_POST['fatheroccupation'];
    $mothername = $_POST['mothername'];
    $motheroccupation = $_POST['motheroccupation'];
    $branch = $_POST['branch'];
    $minority = $_POST['minority'];
    $disability = $_POST['disability'];
    
    $coraddress1 = $_POST['coraddress1'];
    $peraddress1 = $_POST['peraddress1'];
    $coraddress2 = $_POST['coraddress2'];
    $peraddress2 = $_POST['peraddress2'];
    $coraddress3 = $_POST['coraddress3'];
    $peraddress3 = $_POST['peraddress3'];
    $corcity = $_POST['corcity'];
    $percity = $_POST['percity'];
    $corstate = $_POST['corstate'];
    $perstate = $_POST['perstate'];
    $corpincode = $_POST['corpincode'];
    $perpincode = $_POST['perpincode'];
    $cormobno = $_POST['cormobno'];
    $permobno = $_POST['permobno'];
   
    

    


    $result = mysqli_query($mysqli,"INSERT INTO basicdetails values('','$englishname','$hindiname','$gender','$bloodgroup','$dob','$mob1','$mob2','$email','$aadhaar','$fathername','$fatheroccupation','$mothername','$motheroccupation','$branch','$minority','$disability','$coraddress1','$peraddress1','$coraddress2','$peraddress2','$coraddress3','$peraddress3','$corcity','$percity','$corstate','$perstate','$corpincode','$perpincode','$cormobno','$permobno')");

   // echo $res;

   echo $result;

   echo $hindiname;


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