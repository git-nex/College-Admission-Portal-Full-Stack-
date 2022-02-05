<!DOCTYPE html>

<html>

<head>
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #358597;
            font-family: sans-serif;
        }
        
        .loginbox {
            width: 350px;
            height: 420px;
            background: black;
            color: white;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px
        }
        
        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 25%;
            position: absolute;
            top: -75px;
            left: 29%
        }
        
        h1 {
            margin: 0;
            padding: 0 0 20 px;
            text-align: center;
            font-size: 22px;
        }
        
        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        
        .loginbox input {
            width: 100%;
            margin-bottom: 20px;
        }
        
        .loginbox input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid white;
            background: transparent;
            outline: none;
            height: 40px;
            color: white;
            font-size: 18px;
        }
        
        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: red;
            color: white;
            font-size: 18px;
            border-radius: 20px;
        }
        
        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: #ffc107;
            color: #000;
        }
        
        .loginbox a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgrey;
        }
        
        .loginbox a:hover {
            color: #ffc107;
        }
    </style>

    <body>
        <div class="loginbox">
            <img src="./images/logo.jpg" class="avatar">
            <h1>Login Here</h1>
            <form action="login.php" method="post">
                <p>Username</p>
                <input type="text" name= "username" placeholder="Enter Username" required>
                <p>Password</p>
                <input type="Password" name="password" placeholder="Enter Password" required>
                
                <a href="#">Forget your Password?</a><br>
                <a href="register.php">Don't have account?</a>
   
                <input type="submit" name="submit"><br>
            </form>
        </div>
    </body>
</head>

</html
