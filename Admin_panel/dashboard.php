<?php 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice cream Delights - Seller Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/Admin_style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- boxicons cdn link -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="dashboard-page">
    <div class="main-container">
        <?php include '../components/Admin_header.php'; ?>

        <section class="dashboard">
            <div class="heading">
                <img src="../image/ice.png">
            </div>

            <div class="box-container">
                <div class="box">
                    <h3>Welcome!</h3>
                    <!-- <p>php kallk - name ek</p> -->
                     <a href="update.php" class="btn">Update Profile</a>
                </div>

                <div class="box">
                    <!-- <?php ?>   php kallak tynw box ekt profile load krgnn -->
                     <!-- messages -->
                      <h3></h3>
                      <!-- no of mg -->
                       <p>Unread message</p>
                       <a href="admin_message.php" class="btn">See message</a>
                </div>

                <div class="box">
                     <?php ?>   
                     <!-- product tyne meke -->
                      <h3></h3>
                       <p>Products Added</p>
                       <a href="add_products.php" class="btn">Add products</a>
                </div>

                 
                <div class="box">
                     <?php ?>   
                    <!-- active products select active products no of active products -->
                      <h3></h3>
                       <p>Active products</p>
                       <a href="view_products.php" class="btn">Active products</a>
                </div>

                
                <div class="box">
                     <?php ?>   
                    <!-- deactive products select deactive products no of deactive products -->
                      <h3></h3>
                       <p>Deactive products</p>
                       <a href="view_products.php" class="btn">Deactive products</a>
                </div>

                 <div class="box">
                     <?php ?>   
                    <!--users -->
                      <h3></h3>
                       <p>Users</p>
                       <a href="view_users.php" class="btn">See users</a>
                </div>

                 <div class="box">
                     <?php ?>   
                    <!--sellers -->
                      <h3></h3>
                       <p>Sellers</p>
                       <a href="view_sellers.php" class="btn">See sellers</a>
                </div>

                <div class="box">
                     <?php ?>   
                    <!--orders -->
                      <h3></h3>
                       <p>orders placed</p>
                       <a href="Admin_order.php" class="btn">Total orders</a>
                </div>

                <div class="box">
                     <?php ?>   
                    <!--order confirm-->
                      <h3></h3>
                       <p>confirm placed</p>
                       <a href="Admin_order.php" class="btn">Confirmed orders</a>
                </div>

                <div class="box">
                     <?php ?>   
                    <!--cancled orders-->
                      <h3></h3>
                       <p>canceled placed</p>
                       <a href="Admin_order.php" class="btn">Cancled orders</a>
                </div>

            </div>

        </section>
     </div>
     </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
     <?php ?>
     
     <!-- custom js link -->
     <script src="../js/Admin_script.js"></script>
</body>
</html>