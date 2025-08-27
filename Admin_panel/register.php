<?php 
include '../components/connect.php';

$success_msg = [];
$warning_msg = [];
$error_msg = [];

        
// shop list load
$shopQuery = $conn->prepare("SELECT Shop_id, Shop_name FROM shop");
$shopQuery->execute();
$shops = $shopQuery->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['submit'])){
     $Seller_id = unique_id();

     $name = $_POST['name'];
     $name = filter_var($name, FILTER_SANITIZE_STRING);

     $email = $_POST['email'];
     $email = filter_var($email, FILTER_SANITIZE_STRING);

     $pass = $_POST['password'];
     $pass = filter_var($pass, FILTER_SANITIZE_STRING);

     $cpass = $_POST['cpass'];
     $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

     $image = $_FILES['image']['name'];
     $image = filter_var($image, FILTER_SANITIZE_STRING);

     $ext   = pathinfo($image,PATHINFO_EXTENSION);
     $rename = unique_id(). '.' .$ext;

     $image_size =$_FILES['image']['size'];
     $image_tmp_name = $_FILES['image']['tmp_name'];
     $image_folder = '../uploaded_files/' . $rename;

      // selected shop id
       $shop_id = $_POST['shop'];
     
     //check if seller already exist
     $select_seller = $conn->prepare("SELECT * FROM `sellers` WHERE email = ?");
     $select_seller->execute([$email]); 

     if($select_seller->rowCount() > 0) {
        $warning_msg[] = 'Email already exist!';
     } else {
        if($pass != $cpass){
            $warning_msg[] = ' Confirm password does not match!';
        } else{
                         //insert a new seller data
             $insert_seller = $conn->prepare("INSERT INTO `sellers`(Seller_id, name, image, email, password,Shop_Shop_id) VALUES(?,?,?,?,?,?)");
             $insert_seller->execute([$Seller_id, $name, $rename, $email, $pass, $_POST['shop']]);

                  if($insert_seller){
                 //move upload image to server folder
                  $success_msg[] = 'Seller registered successfully!';
                  move_uploaded_file($image_tmp_name,$image_folder);
             } else {
                 $error_msg[] = 'Registration failed!';
             }

        }

     }
}
     
    

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
    <form action="register.php" method="post" enctype="multipart/form-data" class="register">
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

                     <div class="input-field">
                     <p>Choose a shop<span>*</span></p>
                     <select name="shop" required class="box">
                           <option value="">Select a shop</option>
                <?php foreach($shops as $shop): ?>
                  <option value="<?= htmlspecialchars($shop['Shop_id']); ?>">
                      <?= htmlspecialchars($shop['Shop_name']); ?>
                  </option>
                <?php endforeach; ?>  
                     </select>
                    </div>



            </div>
        </div>
    
    <div class="input-field">
        <p>Your picture <span>*</span></p>
        <input type="file" name="image" accept="image/*" required class="box">
    </div>

    <p class="link">Already have an account? <a href="login.php">Login Now</a></p>
    <input type="submit" name="submit" value="Register Now" class="btn">

    </form>
   </div>
   </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <?php include '../components/alert.php';  ?>

</body>
</html>