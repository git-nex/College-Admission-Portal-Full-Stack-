<?php
session_start();
?>


<?php
include("config.php");


   

   echo "Username --- ";
   $username = $_SESSION["username"];


   echo  $username;
   echo "<br>";
   
   if(! $mysqli) {
      die('Could not connect: ' . mysqli_error());
   }
   
   
   $sql1 = "SELECT *  FROM basicdetails WHERE username ='$username'";
   $sql2 = "SELECT *  FROM education WHERE username ='$username'";
   $sql3 = "SELECT *  FROM enclosures WHERE username ='$username'";
   $sql4 = "SELECT *  FROM feesdetails WHERE username ='$username'";
   $sql5 = "SELECT *  FROM jeemaindetails WHERE username ='$username'";
 
   $count = 0;
   $issue = false;

   
   $result1 = mysqli_query($mysqli,$sql1);

   if(mysqli_num_rows($result1) ==1)
   {
     $count = $count + 1;

    if(!$result1) {
       $issue = true;
    }
 
    $basicdetails = mysqli_fetch_array($result1, MYSQLI_ASSOC);


   // mysqli_free_result($result);
 
  //  print_r($education);
   }



   $result2 = mysqli_query($mysqli,$sql2);

   if(mysqli_num_rows($result2) ==1)
   {
      $count = $count + 1;

    if(!$result2) {
      $issue = true;
    }
 
    $education = mysqli_fetch_array($result2, MYSQLI_ASSOC);


   // mysqli_free_result($result);
 
  //  print_r($education);
   }


   $result3 = mysqli_query($mysqli,$sql3);

   if(mysqli_num_rows($result3) ==1)
   {
      $count = $count + 1;

    if(!$result3) {
      $issue = true;
    }
 
    $enclosures = mysqli_fetch_array($result3, MYSQLI_ASSOC);


 
   // mysqli_free_result($result);
 
  //  print_r($education);
   }


   $result4 = mysqli_query($mysqli,$sql4);

   if(mysqli_num_rows($result4) ==1)
   {
      $count = $count + 1;

   
    if(!$result4) {
      $issue = true;
    }
 
    $feesdetails = mysqli_fetch_array($result4, MYSQLI_ASSOC);

   // mysqli_free_result($result);
 
  //  print_r($education);
   }


   $result5 = mysqli_query($mysqli,$sql5);

   if(mysqli_num_rows($result5) ==1)
   {
      $count = $count + 1;

   
    if(!$result5) {
      $issue = true;
    }
 
    $jeemaindetails = mysqli_fetch_array($result5, MYSQLI_ASSOC);

   // mysqli_free_result($result);
 
  //  print_r($education);
   }


   if($count!=5 || $issue == true)
   {
       exit("No Application Found !!!");
   }

   

?>


<html>

<head>
<link rel="stylesheet" href="./css/preview.css">
</head>

<body>


<div class = "mydiv">


<h1>APPLICATION FORM FOR ADMISSION TO BTECH PROGRAMME</h1>

<H2>Basic Details</H2>

<p>NAME IN ENGLISH : <?php echo $basicdetails["englishname"];?></p>
<p>NAME IN HINDI : <?php echo $basicdetails["hindiname"];?></p>
<p>GENDER : <?php echo $basicdetails["gender"];?></p>
<p>BLOOD GROUP : <?php echo $basicdetails["bloodgroup"];?> </p>

<p>MOBILE NUMBER 1  :<?php echo $basicdetails["mob1"];?> </p>
<p>MOBILE NUMBER 2  : <?php echo $basicdetails["mob2"];?></p>
<p>EMAIL : <?php echo $basicdetails["email"];?></p>
<p>AADHAAR NUMBER : <?php echo $basicdetails["aadhaar"];?> </p>


<p>FATHERS NAME   : <?php echo $basicdetails["fathername"];?></p>
<p>FATHERS OCCUPATION : <?php echo $basicdetails["fatheroccupation"];?></p>
<p>MOTHERS NAME : <?php echo $basicdetails["mothername"];?></p>
<p>MOTHERS OCCUPATION : <?php echo $basicdetails["motheroccupation"];?> </p>




<p>BRANCH   : <?php echo $basicdetails["branch"];?></p>
<p>MINORITY DETAILS : <?php echo $basicdetails["minority"];?></p>
<p>PHYSICAL DISABILITY : <?php echo $basicdetails["disability"];?></p>

<H2>JEE MAINS DETAILS</H2>


<p>ROUND OF ALLOTMENT   : <?php echo $jeemaindetails["allotmentround"];?></p>
<p>JEE ROLL NO. : <?php echo $jeemaindetails["rollno"];?></p>
<p>ALL INDIA RANK (AIR) : <?php echo $jeemaindetails["air"];?></p>
<p>MARKS : <?php echo $jeemaindetails["mark"];?>  </p>
<p>SCORE  : <?php echo $jeemaindetails["score"];?></p>
<p>YEAR : <?php echo $jeemaindetails["year"];?></p>
<p>ALLOTMENT CATEGORY : <?php echo $jeemaindetails["allotmentcategory"];?></p>
<p>CANDIDATE CATEGORY : <?php echo $jeemaindetails["candidatecategory"];?></p>

<H2>PAYMENT DETAILS</H2>

<h3>JOSAA COUNSELLING</h3>
<P>DD. NUMBER : <?php echo $feesdetails["dd1"];?></P>
<P>DATE :  <?php echo $feesdetails["date1"];?></P>
<P>AMOUNT : <?php echo $feesdetails["amount1"];?></P>

<h3>INSTITUE REPORTING FOR ADMISSION FEES</h3>
<P>DD. NUMBER : <?php echo $feesdetails["dd2"];?></P>
<P>DATE : <?php echo $feesdetails["date2"];?></P>
<P>AMOUNT : <?php echo $feesdetails["amount2"];?></P>
<P>TOTAL AMOUNT : <?php echo $feesdetails["amount3"];?></P>

<H2>LIST OF ENCLOSURES</H2>

<P>SEAT ALLOTMENT LETTER : <?php echo $enclosures["allotmentletter"];?></P>
<P>JEE RANK : <?php echo $enclosures["rankcard"];?></P>
<P>PHOTO ID PROOF : <?php echo $enclosures["idproof"];?></P>
<P>CERTIFICATE FOR PROOF OF DATE OF BIRTH : <?php echo $enclosures["birthcertificate"];?></P>
<P>QUALIFYING EXAMINATION MARKSHEET : <?php echo $enclosures["jeemarksheet"];?></P>
<P>INCOME CERTIFICATE FOR EWS : <?php echo $enclosures["incomecertificate"];?></P>
<P>CASTE CERTIFICATE : <?php echo $enclosures["castecertificate"];?></P>
<P>CASTE VALIDITY (IF YOU ARE MAHARASHTRIAN) : <?php echo $enclosures["maharashtracard"];?></P>
<P>NON CREAMY LAYER FOR OBC : <?php echo $enclosures["obcncl"];?> </P>
<P>CERTIFICATE FOR DISABILITY : <?php echo $enclosures["disabilitycertificate"];?></P>
<P>TRANSFER CERTIFICATE : <?php echo $enclosures["transfercertificate"];?></P>
<P>MIGRATION CERTIFICATE : <?php echo $enclosures["migration"];?></P>
<P>AADHAR CARD : <?php echo $enclosures["aadhaarcard"];?></P>
<P>GAP CERTIFICATE : <?php echo $enclosures["gap"];?></P>

<H2>ADDRESS FOR CORRESPONDANCE</H2>

<P>HOUSE NUMBER : <?php echo $basicdetails["coraddress1"];?></P>
<P>STREET NUMBER : <?php echo $basicdetails["coraddress2"];?></P>
<P>LOCALITY : <?php echo $basicdetails["coraddress3"];?></P>
<P>CITY : <?php echo $basicdetails["corcity"];?></P>
<P>STATE : <?php echo $basicdetails["corcity"];?></P>
<P>PINCODE : <?php echo $basicdetails["corpincode"];?></P>
<P>MOBILE NUMBER : <?php echo $basicdetails["cormobno"];?></P>
<H2>PERMANENT ADDRESS</H2>
<P>HOUSE NUMBER : <?php echo $basicdetails["peraddress1"];?></P>
<P>STREET NUMBER : <?php echo $basicdetails["peraddress2"];?></P>
<P>LOCALITY : <?php echo $basicdetails["peraddress3"];?></P>
<P>CITY : <?php echo $basicdetails["percity"];?></P>
<P>STATE : <?php echo $basicdetails["perstate"];?></P>
<P>PINCODE : <?php echo $basicdetails["perpincode"];?></P>
<P>MOBILE NUMBER : <?php echo $basicdetails["permobno"];?></P>

<H2>EDUCATION</H2>

<H3>CLASS 10TH </H3>
<P>NAME OF BOARD : <?php echo $education["board1"];?></P>
<P>SUBJECT : <?php echo $education["subject1"];?></P>
<P>YEAR OF PASSING : <?php echo $education["year1"];?></P>
<P>MARKS OBTAINED : <?php echo $education["mark1"];?></P>
<P>PERCENTAGE / GRADE : <?php echo $education["grade1"];?></P>


<H3>CLASS 12TH</H3>
<P>NAME OF BOARD : <?php echo $education["board2"];?></P>
<P>SUBJECT : <?php echo $education["subject2"];?></P>
<P>YEAR OF PASSING : <?php echo $education["year2"];?></P>
<P>MARKS OBTAINED : <?php echo $education["mark2"];?></P>
<P>PERCENTAGE / GRADE : <?php echo $education["grade2"];?></P>




   










</div>

</body>
</html> 





