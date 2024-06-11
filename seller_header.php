<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

   <a href="home.php" class="logo"><img src="images/logo.png" alt="Homeplay logo" style="width: 100%; height: 55px" /></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="panel_page.php">Dashboard</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">Logout</a>
         <div>new <a href="login.php">Login</a> | <a href="register.php">Register</a></div>
      </div>

   </div>

</header>