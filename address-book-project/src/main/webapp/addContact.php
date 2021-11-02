<!DOCTYPE html>
<html>

<head>
    <title>Add Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
</head>

<body>

    <div class="add-contact">
        <h2>Add Contact</h2><br>
        <form id="contact" method="get" action="login.php">
            <label><b>Name</b></label>
            <input type="text" name="name" id="name" placeholder="Name">
            <br><br>
            <label><b>Address</b></label>
            <input type="text" name="address" id="address" placeholder="Address">
            <br><br>
            <label><b>Email</b></label>
            <input type="email" name="email" id="email" placeholder="Email">
            <br><br>
            <label><b>Phone</b></label>
            <input type="text" name="phone" id="phone" placeholder="Phone">
            <br><br>
            <input type="button" name="add" id="add" value="Add Contact">
            <br><br>

        </form>
    </div>
</body>

</html>