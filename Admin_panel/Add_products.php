<?php
include '../components/connect.php'; 

//  if(isset($_COOKIE['Seller_id'])){
//   $Seller_id = $_COOKIE['Seller_id'];
// }else{
  
//   header('location:login.php');
//   exit();
// }
?>

 <!-- add product to databse -->
  <!-- add product to database as draft -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Delights - Add products</title>
    <link rel="stylesheet" type="text/css" href="../css/Admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- boxicons cdn link -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="add-product-page">
   
    <div class="main-container">
        <?php include '../components/Admin_header.php'; ?>
        <div class="post-editor">
            <div class="heading">
                <h1>add products</h1>
                <img src="../image/ice.png">
            </div>
            <div class="form-container">
                <form action="" method="post" entype="multipart/form-data" class="register">
                    <div class="input-field">
                        <p>Product name<span>*</span></p>
                        <input type="text" name="name" placeholder="Add product name" maxlength="100" required class="box">
                    </div>
                     <div class="input-field">
                        <p>Product price<span>*</span></p>
                        <input type="number" name="price" placeholder="Add product price" maxlength="100" required class="box">
                    </div>
                     <div class="input-field">
                        <p>Product detail<span>*</span></p>
                        <textarea name="description" placeholder="Add product details" required class="box" maxlength="1000"></textarea>
                    </div>
                    <div class="input-field">
                        <p>Product stock<span>*</span></p>
                        <textarea name="stock" placeholder="Add product stock" min="0" max="999999999999" required class="box" maxlength="10"></textarea>
                    </div>
                     <div class="input-field">
                        <p>Product image<span>*</span></p>
                        <input type="file" name="image" accept="image/*" required class="box">
                    </div>
                    <div class="flex-btn">
                        <input type="submit" name="publish" value="Add product" class="btn">
                        <input type="submit" name="draft" value="save as draft" class="btn">

                    </div>
            </div>
        </div>
    </div>
    
   

    <?php include '../components/alert.php';  ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
     
     
     <!-- custom js link -->
     <script src="../js/Admin_script.js"></script>
</body>
</html>