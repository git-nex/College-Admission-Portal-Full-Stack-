<?php
session_start();
?>

<?php
include("config.php");


echo $_SESSION["username"];

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



$allotmentletter = $_POST['allotmentletter'];
$castecertificate = $_POST['castecertificate'];
$rankcard = $_POST['rankcard'];
$maharashtracard = $_POST['maharashtracard'];
$idproof = $_POST['idproof'];
$obcncl = $_POST['obcncl'];
$birthcertificate = $_POST['birthcertificate'];
$disabilitycertificate = $_POST['disabilitycertificate'];
$jeemarksheet = $_POST['jeemarksheet'];
$transfercertificate = $_POST['transfercertificate'];
$incomecertificate = $_POST['incomecertificate'];
$migration = $_POST['migration'];
$aadhaarcard = $_POST['aadhaarcard'];
$gap = $_POST['gap'];



$allotmentround = $_POST['allotmentround'];
$rollno = $_POST['rollno'];
$air = $_POST['air'];
$mark = $_POST['mark'];
$score = $_POST['score'];
$year = $_POST['year'];
$allotmentcategory = $_POST['allotmentcategory'];
$candidatecategory = $_POST['candidatecategory'];

 
$dd1 = $_POST['dd1'];
$date1 = $_POST['date1'];
$amount1 = $_POST['amount1'];
$dd2 = $_POST['dd2'];
$date2 = $_POST['date2'];
$amount2 = $_POST['amount2'];
$amount3 = $_POST['amount3'];

$username = $_SESSION["username"];
 



 

$result1 = mysqli_query($mysqli,"INSERT INTO basicdetails (englishname,hindiname,gender,bloodgroup,dob,mob1,mob2,email,aadhaar,fathername,fatheroccupation,mothername,motheroccupation,branch,minority,disability,coraddress1,peraddress1,coraddress2,peraddress2,coraddress3,peraddress3,corcity,percity,corstate,perstate,corpincode,perpincode,cormobno,permobno,username) values('$englishname','$hindiname','$gender','$bloodgroup','$dob','$mob1','$mob2','$email','$aadhaar','$fathername','$fatheroccupation','$mothername','$motheroccupation','$branch','$minority','$disability','$coraddress1','$peraddress1','$coraddress2','$peraddress2','$coraddress3','$peraddress3','$corcity','$percity','$corstate','$perstate','$corpincode','$perpincode','$cormobno','$permobno','$username')");


 $result2 =  mysqli_query($mysqli,"INSERT INTO education (board1,subject1,year1,mark1,grade1,board2,subject2,year2,mark2,grade2,username) values('$board1','$subject1','$year1',' $mark1','$grade1','$board2','$subject2','$year2','$mark2','$grade2','$username')");


$result3 =   mysqli_query($mysqli,"INSERT INTO enclosures (allotmentletter,castecertificate,rankcard,maharashtracard,idproof,obcncl,birthcertificate,disabilitycertificate,jeemarksheet,transfercertificate,incomecertificate,migration,aadhaarcard,gap,username) values('$allotmentletter','$castecertificate','$rankcard','$maharashtracard','$idproof','$obcncl','$birthcertificate','$disabilitycertificate','$jeemarksheet','$transfercertificate','$incomecertificate','$migration','$aadhaarcard','$gap','$username')");

    $result4 = mysqli_query($mysqli,"INSERT INTO feesdetails ( dd1 , date1 , amount1 , dd2 , date2 , amount2 , amount3 , username) values('$dd1','$date1','$amount1','$dd2','$date2','$amount2','$amount3','$username')");

   $result5 = mysqli_query($mysqli,"INSERT INTO jeemaindetails(allotmentround,rollno,air,mark,score,year,allotmentcategory,candidatecategory,username) values('$allotmentround','$rollno','$air','$mark','$score','$year','$allotmentcategory','$candidatecategory','$username')");


 $query1 = mysqli_query($mysqli,$result1);
 $query2 = mysqli_query($mysqli,$result2);
 $query3 = mysqli_query($mysqli,$result3);
 $query4 = mysqli_query($mysqli,$result4);
 $query5 = mysqli_query($mysqli,$result5);
   
 
 $main_result = mysqli_commit($mysqli);

    if($main_result)
    {
       
    echo "Data Submitted successfully";
    header("Location: demo.php");

    }
    else
    {
       echo "Errors Occured !!!";
    }


   // echo $amount2;



}






?>