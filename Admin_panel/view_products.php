<!-- php kallk tynw -->
 <!-- seller id location -->

 <!-- delete product -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Delights - View products</title>
    <link rel="stylesheet" type="text/css" href="../css/Admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- boxicons cdn link -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="view-product-page">
   
    <div class="main-container">
        <?php include '../components/Admin_header.php'; ?>
        <section class="show-post">
            <div class="heading">
                <h1>Your Products</h1>
                <img src="../image/ice.png">
            </div>
            <div class="box-container">
                <?php 
                // select product
                ?>
                <form action="" method="post" class="box">
                                                              <!-- value ek php kallk -->
                    <input type="hidden" name="product_id" value="">
                    <!-- fetch image -->
                     <!-- uploaded files wlin fetch krnw image ek -->
                      <?php ?>
                      <div class="status" style="color:<?php if($fetch_products['status'] == 'active')
                        {echo 'limegreen';} else{echo 'coral';} ?>) ">
                        <!-- fetch product -->
                        </div>
                                         <!-- php kallk tynw product price -->
                        <div class="price"> </div>
                            <div class="content">
                                <img src="">
                                                  <!-- php  fetch name -->
                                <div class="title"></div>
                                <div class="flex-btn">
                                    <a href="edit_product.php?=<?= $fetch_products['id']; ?>" class="btn">edit"</a>
                                    <button type="submit" name="delete" class="btn" onclick="return confirm('delete this product?');">delete</button>  
                                    <a href="read_product.php?post_id=<?= $fetch_products['id']; ?>" class="btn">read</a>
                                </div>

                            </div>
                </form>
                <?php ?>
            </div>
        </section>
 
        </div>
         <?php include '../components/alert.php';  ?>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script src="../js/Admin_script.js"></script>

</body>
</html>