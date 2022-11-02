<?php      
    include('../connection.php'); 
    include('../Header.php'); 
    session_start();
    // var_dump($_REQUEST); 
    $email_or_phone = $_POST['email_or_phone'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        // $email_or_phone = stripcslashes($stripcslashes);  
        // $password = stripcslashes($password);  
      
        $sql = "SELECT * FROM shop WHERE ( email = '$email_or_phone' OR phone = '$email_or_phone' ) AND (password = '$password')";  
        $result = mysqli_query($con, $sql);
        
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // echo ($row["username"]);
        
        $count = mysqli_num_rows($result);
        
        
        
        
        if($count == 1){ 
            $email = $row["email"];
            $phone = $row["phone"];
            $shopname = $row["shopname"];

            $_SESSION["email"]=$email;
            $_SESSION["phone"]=$phone;
            $_SESSION["shopname"]=$shopname;

            
            header('Location:  ../Users/user/shop_dashboard.php');
            // if($row["user_type"]=="admin") {
            //     setcookie($email,$phone, $username, $user_type, time()+ (86400*30));
            //     header('Location: ../Users/admin/admin_dashboard.php');
            // }
            // if($row["user_type"]=="manager") {
            //     setcookie($email,$phone, $username, $user_type, time()+ (86400*30));
            //     header('Location: ../Users/manager/manager_dashboard.php');
            // }
        }  
        // if($count == 1){ 
        //     echo $result;
        //     header('Location: ../Users/admin/admin_dashboard.php');
        //     // if($row["user_type"=="admin"]) {
        //     //     header('Location: ../Users/admin/admin_dashboard.php');
        //     // }
        //     // if($row["user_type"=="manager"]) {
        //     //     header('Location: ../Users/manager/manager_dashboard.php');
        //     // }
        //     // if($row["user_type"=="user"]) {
        //     //     header('Location: ../Users/user/user_dashboard.php');
        //     // }
        // }  
        else{  
            // echo "
            // <h4 class='fs-3 fs-bold'> Wrong Credentials </h4>
            // <a href='../login.php' class='text-primary'><i class='fa-solid fa-backward'></i>Back to login</a>
            // ";  
            header('Location: ../wrong_credentials.php');
        }        
?>
