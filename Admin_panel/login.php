
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
    <form action="register" method="post" entype="multipart/form-data" class="login">
        <h2>Login Now</h2>
                <div class="input-field">
                    <p>Your email<span>*</span></p>
                    <input type="text" name="email" placeholder="Enter your email" maxlength="30" required class="box">
                </div>

                <div class="input-field">
                    <p>Your password<span>*</span></p>
                    <input type="password" name="password" placeholder="Enter your password" maxlength="30" required class="box">
                </div>

    <p class="link"></p>Do not have an account? <a href="register.php">Register Now</a></p>
    <input type="submit" name="submit" value="Login Now" class="btn">

    </form>
    </div>
   </div>
   </div>

</body>
</html>