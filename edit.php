<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>safal contact app</h1>
    </header>
    <?php
    include 'db.php';
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE $id = ".$id;

    $result =mysqli_query($conn,$sql);

    if($result){
        $row = mysqli_fetch_assoc($result);
        $contactname = $row['name'];
        $contactphone = $row['phone'];
    }


    ?>
    <h2>Update Contact</h2>
    <form action="adddata.php" method="post">
    <div class="main">
    <input type="hidden" name="id" id="id" value="<?php global $id?>"required>
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" value="<?php global $id;echo $contactname?>"required><br>
    <label for="contact">Number:</label><br>
    <input type="number" name="contact" id="contact"required><br><br>
    <input type="submit" value="Update">
    </div>
    </form>
    
    
</body>
</html>

