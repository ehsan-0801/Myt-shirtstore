<?php      
    include('../../connection.php'); 
    session_start();
    var_dump($_REQUEST); 
    $email_or_phone = $_POST['email_or_phone'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        // $email_or_phone = stripcslashes($stripcslashes);  
        // $password = stripcslashes($password);  
      
        $sql = "SELECT * FROM admins WHERE ( email = '$email_or_phone' OR phone = '$email_or_phone' ) AND (password = '$password')";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location: ../admin_dashboard.php'); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }        
?>
