<!DOCTYPE html>

<head>
    
   <link rel="stylesheet" href="./css/main.css"> 
    <title>Registration Form</title>
    <style>
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: red;
          color: white;
          text-align: center;
        }
        </style>
        
        <div class="footer">
          <p>Made By Aayush Verma(BT19CSE012) and Ansh Garewal(BT19CSE001)</p>
        </div> 
    <legend>
        <center>
            <h2><img src="images/logo.jpg" alt=""><b>Registration Form</b></h2>
        </center>
    </legend><br>

    <h1 class="topline" align="center">
        APPLICATION FORM FOR ADMISSION TO BTECH PROGRAMME 2021-22


    </h1>
    <h3 align="center">Enter Details form here onwards(ALL ENTRIES IN CAPITAL LETTERS)</h3>


</head>

<body>
    
    <form action="insert.php" method="post">

        <div id="display_image">
            <p align="right"> Upload Photo <input type="file" name="pic" accept="image/png , image/jpg"></p>
        </div>
        <script src="main.js"></script>


        <table class="tab1" border="1" height="50px" width="60%">
            <tr>
                <th>Name in English</th>
                <th> <input type="text" name="englishname"></th>
            </tr>

            <tr>
                <th>Name in Hindi</th>
                <th><input type="text" name="hindiname"></th>
            </tr>
        </table>

        <table class="tab3" border="1" height="50px" width="60%">
            <tr>
                <div class="tab2">
                    <th>Gender</th>
                    <th><input type="text" name="gender"></th>
                </div>
            </tr>
            <tr>
                <div class="tab2">
                    <th>Blood Group</th>
                    <th> <input type="text" name="bloodgroup"></th>
                </div>
            </tr>
            <tr>
                <div class="tab2">
                    <th>Date of Birth</th>
                    <th> <input type="date" name="dob"></th>
                </div>
            </tr>
            <tr>
                <div class="tab2">
                    <th>Mobile No.1</th>
                    <th> <input type="text" name="mob1"></th>
                </div>
            </tr>
            <tr>
                <div class="tab2">
                    <th>Mobile No.2</th>
                    <th> <input type="text" name="mob2"></th>
                </div>
            </tr>
            <tr>
                <div class="tab2">
                    <th>Email</th>
                    <th> <input type="text" name="email"></th>
                </div>
            </tr>
            <tr>
                <div class="tab2">
                    <p>
                        <th>Aadhaar Number</th>
                        <th> <input type="text" name="aadhaar"></th>
                    </p>
                </div>
            </tr>
        </table>
        <table class="tab1" border="2" height="50px" width="60%">

            <tr>
                <th>Father's Name</th>
                <th>Shri <input type="text" name="fathername"></th>
                <th>Occupation - <input type="text" name="fatheroccupation"></th>
            </tr>

            <tr>
                <th>Mother's Name</th>
                <th>Smt. <input type="text" name="mothername"></th>
                <th>Occupation - <input type="text" name="motheroccupation"></th>
            </tr>

        </table>

        <div class="tab2"><p>Branch: CSE/ECE <input type="text" name="branch"></p></div>
         <div class="tab2">Minority Detail: Muslim/Jain/Sikh/Christian <input type="text" name="minority"></p></div>
        <div class="tab2"><p>Physically Disabled: (Yes/No) <input type="text" name="disability"> <br> (If YES, please attach
            verification
            report Medical Committee of IIIT Nagpur.)</p>  
     <!--       <table class="tab4" border="1">
            <tr>
                <th>Branch: CSE/ECE</th>
                <th><input type="text" name="branch"></th>
            </tr>
            <tr>
                <th>Minority Detail: Muslim/Jain/Sikh/Christian</th>
                <th><input type="text" name="minority"></th>
            </tr>
            <tr>
                <th>Physically Disabled: (Yes/No)</th>
                <th><input type="text" name="disability"></th>
            </tr>
        </table>  -->  

        <table class="tab1" border="1" height="50px" width="80%">
            <p class="pix">JEE Mains Details:</p>
            <tr>
                <th>Round of Allotment</th>
                <th><input type="text" name="allotmentround"></th>
            </tr>
            <tr>
                <th>JEE Roll No.</th>
                <th><input type="text" name="rollno"></th>
            </tr>

            <tr>
                <th>JEE All India Rank Score</th>
                <th>AIR
                    <input type="text" name="air"> Mark <input type="text" name="mark"> Score <input type="text"
                        name="score"> Year <input type="text" name="year">
                </th>
            </tr>
            <tr>
                <th>Allotment Category: OP/SC/ST/OBC/EWS & PD</th>
                <th><input type="text" name="allotmentcategory"> </th>

            </tr>

            <tr>
                <th>
                    Candidate Category: OP/SC/ST/OBC & PD
                </th>

                <th>
                    <input type="text" name="candidatecategory">
                </th>
            </tr>


        </table>


       

        <table class="tab1" border="1" height="50px" width="80%">
            <p class="pix">Details of Fees Payment</p>
            <tr>
                <th>Sr. No.</th>
                <th>Detail</th>
                <th>DD/ECS No.</th>
                <th>Date</th>
                <th>Amount</th>
            </tr>

            <tr>
                <th>1</th>
                <th>JoSSA 2020 counseling</th>
                <th><input type="text" name="dd1"></th>
                <th><input type="date" name="date1"></th>
                <th>
                    Rs. <input type="text" name="amount1">
                </th>

            </tr>

            <tr>

                <th>2</th>
                <th>At Institute Reporting for admission</th>
                <th><input type="text" name="dd2"></th>
                <th><input type="date" name="date2"></th>
                <th>
                    Rs. <input type="text" name="amount2">
                </th>

            </tr>

            <tr>
                <th>3</th>
                <th>Total Amount</th>
                <th></th>
                <th></th>
                <th>Rs. <input type="text" name="amount3"> </th>
            </tr>


        </table>




        <p class="pix2">Wheter Hostel Required: Yes/No <input type="text" name="hostel"></p>


  

        <table class="tab1" border="1" height="50px" width="80%">
            <p class="pix">List of Enclosures (YES/NA):</p>
            <tr>
                <th>1)Seat Allotment Letter</th>
                <th><input type="text" name="allotmentletter"></th>
                <th>7) Cast Certificate ( As applicable to Res Category )</th>
                <th><input type="text" name="castecertificate"></th>
            </tr>

            <tr>
                <th>2)JEE Rank Card</th>
                <th><input type="text" name="rankcard"></th>
                <th>8) Cast validity (if caste certificate issued by Maharashtra Govt.)</th>
                <th><input type="text" name="maharashtracard"></th>
            </tr>

            <tr>
                <th>3) Photo ID Proof</th>
                <th><input type="text" name="idproof"></th>
                <th>9) Non-Creamy layer Certificate for OBC Category</th>
                <th><input type="text" name="obcncl"></th>

            </tr>

            <tr>
                <th>4) Certificate for proof of date of birth</th>
                <th><input type="text" name="birthcertificate"></th>
                <th>10) Certificate for persons with disabilities</th>
                <th><input type="text" name="disabilitycertificate"></th>

            </tr>

            <tr>
                <th>5) Qualifying Examination Mark-Sheet</th>
                <th><input type="text" name="jeemarksheet"></th>
                <th>11) Transfer Certificate</th>
                <th><input type="text" name="transfercertificate"></th>

            </tr>

            <tr>
                <th>6) Income Certificate (For EWS)</th>
                <th><input type="text" name="incomecertificate"></th>
                <th>12) Migration Certificate</th>
                <th><input type="text" name="migration"></th>

            </tr>

            <tr>
                <th>13) Aadhaar Card</th>
                <th><input type="text" name="aadhaarcard"></th>
                <th>14) GAP Certificate (If applicable)</th>
                <th><input type="text" name="gap"></th>
            </tr>
        </table>





        <br>
        <br>
        <br>
        <p class="pix2">Verifying official sign with date</p>
        <br>



     

        <table class="tab1" border="1" height="50px" width="80%">
            <p class="pix">Address:</p>

            <tr>

                <th>Address for Correspondence</th>
                <th>Permanent Address</th>
            </tr>

            <tr>
                <th><input type="text" name="coraddress1"></th>
                <th><input type="text" name="peraddress1"></th>
            </tr>

            <tr>
                <th><input type="text" name="coraddress2"></th>
                <th><input type="text" name="peraddress2"></th>
            </tr>

            <tr>
                <th><input type="text" name="coraddress3"></th>
                <th><input type="text" name="peraddress3"></th>
            </tr>

            <tr>
                <th>City: <input type="text" name="corcity"></th>
                <th>City: <input type="text" name="percity"></th>
            </tr>

            <tr>
                <th>State: <input type="text" name="corstate"></th>
                <th>State: <input type="text" name="perstate"></th>

            </tr>


            <tr>
                <th>PINCODE: <input type="text" name="corpincode"></th>
                <th>PINCODE: <input type="text" name="perpincode"></th>

            </tr>


            <tr>
                <th>Mobile Number: <input type="text" name="cormobno"></th>
                <th>Mobile Number: <input type="text" name="permobno"></th>
            </tr>


        </table>


     

        <table class="tab1" border="1" height="50px" width="80%">
            <p class="pix">Education:</p>

            <tr>

                <th>Class</th>
                <th>Name of Board</th>
                <th>Subject</th>
                <th>Year of Passing</th>
                <th>Marks Obtained</th>
                <th>Percentage/Grade</th>

            </tr>

            <tr>
                <th>10th / SSC</th>
                <th><input type="text" name="board1"></th>
                <th><input type="text" name="subject1"></th>
                <th><input type="text" name="year1"></th>
                <th><input type="text" name="mark1"></th>
                <th><input type="text" name="grade1"></th>
            </tr>


            <tr>
                <th>12th / HSC</th>
                <th><input type="text" name="board2"></th>
                <th><input type="text" name="subject2"></th>
                <th><input type="text" name="year2"></th>
                <th><input type="text" name="mark2"></th>
                <th><input type="text" name="grade2"></th>
            </tr>



        </table>


        <p class="pix2">Scanned copies of documents uploaded? (Yes / No) <input type="text" name="docuploaded"> <br>10th
            Marksheet /
            12th Marksheet / Aadhaar / Category Certificate / PWD Certificate / EWS (If applicable)</p>

        <p class="pix2">Whether suffering from any chronic disease: Yes / No <input type="text" name="chronicdisease"> <br>If
            yes,
            please provide detailed information</p>


        <input type="submit" name="submit">


    </form>


    <hr>

    <br>
    <br>
    <br>
</body>

</html>