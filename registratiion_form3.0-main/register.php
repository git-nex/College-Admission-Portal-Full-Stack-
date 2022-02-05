<!DOCTYPE html>


<head>
    <title>Sample Registration Page</title>
    <style>
        body {
            background-color: #358597;;
        }
        
        form {
            padding: 10px;
            line-height: 10px
        }
        
        main {
            width: 200px;
            height: 200px;
            padding: 10px;
            background: beige;
        }
        
        .imgcontainer {
            text-align: center;
            /*border-radius: 500%;*/
            margin: 20px 12px;
        }
        
        p {
            color: black;
            border-bottom: 1.50px solid black;
           
            color: black;
        }
        
        button {
            background-color: rgb(0, 0, 0);
            cursor: pointer;
            width: 100px;
            height: 25px;
        }

        .sub
        {
            text-align: center;
        }
        
        button:hover {
            opacity: 0.52;
        }
    </style>
</head>



<body>
    <p style="color:blanchalmond; 
font-size:49.9px;  
font-weight:bold;
text-align:center;">
        Registration form

    </p>

    <div class="imgcontainer">
        <img src="./images/logo.jpg" width="170px">
        <img </div>


        <form action="users.php" method="post" align="center">

            *First name: <input type="text" name="FirstName" value="" placeholder="Name" required>
            <br> *Last name: <input type="text" name="LastName" value="" placeholder="Last Name" required>
            <br> *Username: <input type="text" name="username" placeholder="Username Name" required>

            <br> *Password: <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                required>

            <br>

            <br>

            <label>
  <input type="checkbox" checked="checked" name="remember"> Remember me
</label>
         
            </b>
            </style>
            </p>
            </pre>
            <button type="button " class="cancelbtn " style="color:White">Cancel</button><br>
            <br>
            <span><a href="index.php">Already register?</a></span>
    </div>
    <div class = "sub">
    <input type="submit" name="submit" align = "center">
    </div>
    </form>

    <div id="cursor" class="cursor--moved cursor--hidden" style="top: 231px; left: 1036px;"></div>



</body>

</html>