<?php 
// include '../components/connect.php';

// if(isset($_POST['submit'])){
//      $id = uniqid();

//      $name = $_POST['name'];
//      $name = filter_var($name, FILTER_SANITIZE_STRING);

//      $email = $_POST['email'];
//      $email = filter_var($email, FILTER_SANITIZE_STRING);

//      $pass = sha1($_POST['password']);
//      $pass = filter_var($pass, FILTER_SANITIZE_STRING);

//      $cpass = sha1($_POST['cpass']);
//      $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);



// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Delights - Registration page</title>
    <link rel="stylesheet" href="../css/Admin_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="register-page">
   <div class="form-container">
    <form action="register" method="post" entype="multipart/form-data" class="register">
        <h2>Register Now</h2>
        <div class="flex">
            <div class="col">
                <div class="input-field">
                    <p>Your name<span>*</span></p>
                    <input type="text" name="name" placeholder="Enter your name" maxlength="30" required class="box">
                </div>

                <div class="input-field">
                    <p>Your email<span>*</span></p>
                    <input type="text" name="email" placeholder="Enter your email" maxlength="30" required class="box">
                </div>

                <div class="input-field">
                    <p>Your password<span>*</span></p>
                    <input type="password" name="password" placeholder="Enter your password" maxlength="30" required class="box">
                </div>

                <div class="input-field">
                    <p>confirm password<span>*</span></p>
                    <input type="password" name="cpass" placeholder="Enter confirm password" maxlength="30" required class="box">
                </div>

            </div>
        </div>
    
    <div class="input-ield">
        <p>Your picture <span>*</span></p>
        <input type="file" name="image" accept="image/*" required class="box">
    </div>

    <p class="link"></p>Already have an account? <a href="login.php">Login Now</a></p>
    <input type="submit" name="submit" value="Register Now" class="btn">

    </form>
   </div>
   </div>
</body>
</html>