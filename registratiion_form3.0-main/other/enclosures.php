
<?php

include("config.php");

if(isset($_POST['submit']))
{

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
    
    

    


    $result = mysqli_query($mysqli,"INSERT INTO enclosures values('$allotmentletter','$castecertificate','$rankcard','$maharashtracard','$idproof','$obcncl','$birthcertificate','$disabilitycertificate','$jeemarksheet','$transfercertificate','$incomecertificate','$migration','$aadhaarcard','$gap')");

   // echo $res;

   echo $rankcard;


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