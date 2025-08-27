<?php 
 include '../components/connect.php';

//  view product eke udin if kotasa gnnw

//delte products
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Delights - read products</title>
     <link rel="stylesheet" type="text/css" href="../css/Admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- boxicons cdn link -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="main-container">
      <?php include '../components/Admin_header.php'; ?>  

      <section class="read_post">
           <div class="heading">
            <h1>Product detail</h1>
            <img src="../image/ice.png">
           </div>

           <div class="box-container">
            <!-- <?php ?> seller ge product ek load krgnw -->

            <form action="" method="post" class="box">
                <!-- <?php  ?> product id ekkn image load krnww -->
            
            <div class="price"><?php  ?></div>
            <div class="title"><?php  ?></div>
            <div class="content"><?php  ?></div>

            <div class="flex-btn">
                <a href="edit_product.php" class="btn">Edit</a>
                <button type="submit" name="delete" class="btn" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>


                <a href="view_product.php" class="btn">go back</a>
            </div>
            </form>

            <!-- <?php  ?> view product eke empty div class ek othanin paste krnw -->

                    



           </div>
      </section>
    </div>
    <?php include '../components/alert.php';  ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="../js/Admin_script.js"></script>
    
</body>
</html>