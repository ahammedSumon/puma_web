<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $phone = $_POST['phone'];

    $conn = new mysqli('localhost','root','','puma');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);

    }
    else{
        $stmt = $conn->prepare("insert into members(email,password,name,branch,phone) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi",$email, $password, $name, $branch, $phone);
        $stmt->execute();
        echo "registration successful...";
        $stmt->close();
        $conn->close();
    }
?>