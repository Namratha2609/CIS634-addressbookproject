<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
    <title>Contacts</title>
</head>

<body>
    <header>
        <nav>
            <h2>Contacts Details</h2>
            <a href="#">Logout</a>
        </nav>
    </header>
    <div class="contacts">
        <div class="search">
            <a href="addContact.php" class="btn-add">Add Contact</a>
            <input type="text" name="search" id="search" placeholder="search">
        </div><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Name1</td>
                <td>Address1</td>
                <td>Email1</td>
                <td>Phone1</td>
                <td><button class="delete">Delete</button></td>
            </tr>
        </table>
    </div>
</body>

</html>
