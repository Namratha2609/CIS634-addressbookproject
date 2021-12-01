<?php 
session_start();
include 'connection.php';
if(!isset($_SESSION['user'])){
    $user=0;
}else{
    $user=1;
}
?>
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
            <?php
            if($user==1){
                ?>
                <a href="logout.php">Logout</a>
                <?php
            }
            ?>
        </nav>
    </header>
    <div class="contacts">
        <div class="search">
            <?php
            if($user==1){
                ?>
                <a href="addContact.php" class="btn-add">Add Contact</a>
                <?php
            }
            ?>
                    <form action="searchContact.php" method="POST" id="search_form">
                        <input type="text" name="search" id="search" placeholder="search">
                        <input type="submit" class="searchBtn" name="sSubmit" id="sSubmit" value="Search Contact">
                    </form>
        </div><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <?php
            if($user==1){
                ?>
                    <th>Action</th>
                    <?php
            }
            ?>

            </tr>
            <?php
            $sql = "SELECT * FROM contacts";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>

                <tr>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['address']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['phone']; ?>
                    </td>
                    <?php
            if($user==1){
                ?>
                        <td><a href="deleteContact.php?phone=<?php echo $row['phone']; ?>" class="delete">Delete</a></td>
                        <?php
            }
            ?>

                </tr>
                <?php
            }}
            ?>
        </table>
    </div>


</body>

</html>