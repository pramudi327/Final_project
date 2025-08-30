<?php 
// include '../components/connect.php';

// // seller cookie check karanawa
// if(isset($_COOKIE['Seller_id'])){
//   $Seller_id = $_COOKIE['Seller_id'];
// }else{
  
//   header('location:login.php');
//   exit(); // header ekata passe code run wenna bari wenna
// }

// // seller profile ganna query ekak run wenna
// $fetch_profile = null;
// if(!empty($Seller_id)){
//     $select_profile = $conn->prepare("SELECT * FROM `sellers` WHERE Seller_id = ?");
//     $select_profile->execute([$Seller_id]);
//     $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice cream Delights - Seller Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/Admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                    <!-- <p><?= $fetch_profile['name'] ?? ''; ?></p> -->
                    <a href="update.php" class="btn">Update Profile</a>
                </div>

                <div class="box">
                    <?php 
                    $select_message = $conn->prepare("SELECT * FROM `message` WHERE Seller_id = ?");
                    $select_message->execute([$Seller_id]);
                    $number_of_msg = $select_message->rowCount();
                    ?>
                      <h3><?= $number_of_msg; ?></h3>
                      <p>Unread message</p>
                      <a href="admin_message.php" class="btn">See message</a>
                </div>

                <div class="box">
                     <?php
                     $select_product = $conn->prepare("SELECT * FROM `product` WHERE Seller_id = ?");
                     $select_product->execute([$Seller_id]);
                     $number_of_product = $select_product->rowCount();
                      ?>   
                      <h3><?= $number_of_product; ?></h3>
                      <p>Products Added</p>
                      <a href="add_products.php" class="btn">Add products</a>
                </div>

                <div class="box">
                     <?php
                    //  $select_active_products = $conn->prepare("SELECT * FROM `products` WHERE Seller_id = ? AND status = ?");
                    //  $select_active_products->execute([$Seller_id, 'active']);
                    //  $number_of_active_products = $select_active_products->rowCount();
                     ?>   
                      <h3><?= $number_of_active_products; ?></h3>
                      <p>Active products</p>
                      <a href="view_products.php" class="btn">Active products</a>
                </div>

                <div class="box">
                     <?php 
                    //  $select_deactive_products = $conn->prepare("SELECT * FROM `products` WHERE Seller_id = ? AND status = ?");
                    //  $select_deactive_products->execute([$Seller_id, 'deactive']);
                    //  $number_of_deactive_products = $select_deactive_products->rowCount();
                     ?>   
                      <h3><?= $number_of_deactive_products; ?></h3>
                      <p>Deactive products</p>
                      <a href="view_products.php" class="btn">Deactive products</a>
                </div>

                 <div class="box">
                     <?php 
                    //  $select_users = $conn->prepare("SELECT * FROM `users`");
                    //  $select_users->execute();
                    //  $number_of_users = $select_users->rowCount();
                     ?>   
                      <h3><?= $number_of_users; ?></h3>
                      <p>Users</p>
                      <a href="view_users.php" class="btn">See users</a>
                </div>

                 <div class="box">
                     <?php 
                    //  $select_sellers = $conn->prepare("SELECT * FROM `sellers`");
                    //  $select_sellers->execute();
                    //  $number_of_sellers = $select_sellers->rowCount();
                     ?>   
                      <h3><?= $number_of_sellers; ?></h3>
                      <p>Sellers</p>
                      <a href="view_sellers.php" class="btn">See sellers</a>
                </div>

                <div class="box">
                     <?php 
                    //  $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE Seller_id = ?");
                    //  $select_orders->execute([$Seller_id]);
                    //  $number_of_orders = $select_orders->rowCount();
                     ?>   
                      <h3><?= $number_of_orders; ?></h3>
                      <p>Orders placed</p>
                      <a href="Admin_order.php" class="btn">Total orders</a>
                </div>

                <div class="box">
                     <?php 
                    //  $select_confirm_orders = $conn->prepare("SELECT * FROM `orders` WHERE Seller_id = ? AND status = ?");
                    //  $select_confirm_orders->execute([$Seller_id, 'in progress']);
                    //  $number_of_confirm_orders = $select_confirm_orders->rowCount();
                     ?>   
                      <h3><?= $number_of_confirm_orders; ?></h3>
                      <p>Confirm placed</p>
                      <a href="Admin_order.php" class="btn">Confirmed orders</a>
                </div>

                <div class="box">
                     <?php 
                    //  $select_canceled_orders = $conn->prepare("SELECT * FROM `orders` WHERE Seller_id = ? AND status = ?");
                    //  $select_canceled_orders->execute([$Seller_id, 'canceled']);
                    //  $number_of_canceled_orders = $select_canceled_orders->rowCount();
                     ?>   
                      <h3><?= $number_of_canceled_orders; ?></h3>
                      <p>Canceled placed</p>
                      <a href="Admin_order.php" class="btn">Canceled orders</a>
                </div>

            </div>

        </section>
     </div>
     </div>
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
     <script src="../js/Admin_script.js"></script>
</body>
</html>
