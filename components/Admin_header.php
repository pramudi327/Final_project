<?php 
include '../components/connect.php';

// check if seller_id cookie is set
if(isset($_COOKIE['Seller_id'])){
    $Seller_id = $_COOKIE['Seller_id'];
}else{
    $Seller_id = ''; 
}

// get seller profile only once
$fetch_profile = null;
if(!empty($Seller_id)){
    $select_profile = $conn->prepare("SELECT * FROM `sellers` WHERE Seller_id = ?");
    $select_profile->execute([$Seller_id]);
    if($select_profile->rowCount() > 0){
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
    }
}
?>
<header>
    <div class="logo">
        <img src="../image/logo3.png" class="logo-img" width="80">
    </div>
    <div class="right">
        <div class="bx bxs-user" id="user-btn"></div>
        <div class="toggle-btn"><i class="bx bx-menu"></i></div>
    </div>
    
    <div class="profile-detail">
        <?php if($fetch_profile){ ?>
            <div class="profile">
                <img src="../uploaded_files/<?= htmlspecialchars($fetch_profile['image']); ?>" class="logo-img" width="80">
                <p><?= htmlspecialchars($fetch_profile['name']); ?></p>
                <div class="flex-btn">
                    <a href="profile.php" class="btn">Profile</a>
                    <a href="../components/Admin_logout.php" onclick="return confirm('Are you sure you want to logout?');" class="btn">Logout</a>
                </div>
            </div>
        <?php } ?>  
    </div>
</header>

<!-- Sidebar -->
<div class="sidebar-container">
    <div class="sidebar">
        <?php if($fetch_profile){ ?>
            <div class="profile">
                <img src="../uploaded_files/<?= htmlspecialchars($fetch_profile['image']); ?>" class="logo-img" width="80">
                <p><?= htmlspecialchars($fetch_profile['name']); ?></p>
            </div>
        <?php } ?>


        

    <h5>Menu</h5>
    <ul>
        <li><a href="dashboard.php"><i class="bx bxs-home-smile"></i>Home</a></li>
        <li><a href="add_products.php"><i class="bx bxs-shopping-bags"></i>Add Products</a></li>
        <li><a href="view_products.php"><i class="bx bxs-food-menu"></i>View Products</a></li>
        <li><a href="user_accounts.php"><i class="bx bxs-user-detail"></i>Accounts</a></li>
        <li><a href="../components/Admin_logout.php" onclick="return confirm('Are you sure you want to logout?')"><i class="bx bxs-log-out-circle"></i>Logout</a></li>
    </ul>     
    
    <h5>Find Us</h5>
    <div class="social-links">
        <i class="bx bxl-facebook"></i>
        <i class="bx bxl-whatsapp"></i>
        <i class="bx bxl-youtube"></i>
        <i class="bx bxl-linkedin"></i>
    </div>
</div>
</div>
<!-- sidebar end -->
      

