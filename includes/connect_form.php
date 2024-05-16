<?php
$username = $_POST["username"];
$password_1 = $_POST["password_1"];
$password_2 = $_POST["password_2"];
$email = $_POST["email"];

//connect to the database
$conn = new mysqli('localhost', 'root', '', 'project');
if ($conn->connect_error){
    die('Connection failed : ' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into user(username, password_1, password_2, email)
    values(?, ?, ?, ?)");
    $stmt->bind_param("siis",$username, $password_1, $password_2, $email);
    $stmt->execute();
    echo "registration sucessfully...";
    header("Location: ../signin.php");
   
    $stmt->close();
    $conn->close();
    
    
}

?>