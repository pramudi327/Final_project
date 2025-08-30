<?php 
include '../components/connect.php';

$success_msg = [];
$warning_msg = [];
$error_msg = [];


if(isset($_POST['submit'])){
    
     $email = $_POST['email'];
     $email = filter_var($email, FILTER_SANITIZE_STRING);

     $pass = $_POST['password'];
     $pass = filter_var($pass, FILTER_SANITIZE_STRING);

     //prepare thr sql statment to check matching credential
     $select_seller = $conn->prepare("SELECT * FROM `sellers` WHERE email = ? AND password = ?");
     $select_seller->execute([$email,$pass]); 


    if($select_seller->rowCount() > 0){
        $row = $select_seller->fetch(PDO::FETCH_ASSOC);

        setcookie('Seller_id',$row['Seller_id'],time()+60*60*24*30, '/');
        header('location:dashboard.php');
        exit();
    }else{
        $warning_msg[] = 'Incorrect email or password!';
    }
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Delights - Seller Login page</title>
    <link rel="stylesheet" href="../css/Admin_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-page">
   <div class="form-container">
    <form action="" method="post" enctype="multipart/form-data" class="login">
        <h2>Login Now</h2>
                

                <div class="input-field">
                    <p>Your email<span>*</span></p>
                    <input type="text" name="email" placeholder="Enter your email" maxlength="30" required class="box">
                </div>

                <div class="input-field">
                    <p>Your password<span>*</span></p>
                    <input type="password" name="password" placeholder="Enter your password" maxlength="30" required class="box">
                </div>

               

    <p class="link">Do not have an account? <a href="register.php">Register Now</a></p>
    <input type="submit" name="submit" value="Login Now" class="btn">

    </form>
    </div>
   </div>
   </div>
        
           <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
           <?php include '../components/alert.php';  ?>


</body>
</html>