<?php
$name = $_POST['name'];
$phone = $_POST['contact'];

echo "Name is\n".$name."\nphone number is:".$phone;


include 'db.php';

$sql = "Insert INTO users(name,phone)Value('$name','$phone')";
$result = mysqli_query($conn, $sql);

if($result){
    header('location:index.php');
}


?>