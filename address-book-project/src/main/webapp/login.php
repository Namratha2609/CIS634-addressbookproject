<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <script src="js/login_validation.js"></script>
</head>

<body>

    <div class="login">
        <h2>Login Page</h2><br>
        <form id="login" name="login" method="POST" action="loginAccount.php" onsubmit="return validate()">
            <label><b>User Name     
        </b>    
        </label>
            <input type="text" name="Uname" id="Uname" placeholder="Username">
            <br><br>
            <label><b>Password     
        </b>    
        </label>
            <input type="Password" name="Pass" id="Pass" placeholder="Password">
            <br><br>
            <input type="submit" name="log" id="log" value="Log In Here">
            <br><br>
            <input type="checkbox" id="check">
            <label for="check">Remenber me</label>
            <br><br> Forgot <a href="#">Password</a>
        </form>
    </div>

</body>

</html>