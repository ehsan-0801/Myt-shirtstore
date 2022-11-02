<?php      
    include('../connection.php'); 
    session_start();
    $email = $_POST['email'];  
    $phone = $_POST['phone'];  
    $password = $_POST['password'];
    $shopname = $_POST['shopname'];

    if (isset($_POST['create'])) {
        $sql = "INSERT INTO shop (email, phone, password, shopname) 
        VALUES('$email', '$phone', '$password', '$shopname')"; 
        mysqli_query($con, $sql);
        
        header('Location: ../Shop_login.php');

    }
    
    
