<!DOCTYPE html>
<html lang="nl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Cookies n Milk</title>

   <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
   <link rel="manifest" href="img/site.webmanifest">

   <link rel="stylesheet" href="css/uikit.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
   <nav class="uk-navbar-container">
      <div class="uk-container">
         <div uk-navbar>

            <div class="uk-navbar-left">
               <ul class="uk-navbar-nav">
                  <li>
                     <a href="./index.php">
                        <img class="logo" src="./img/CookieLogo.jpg" alt="Cookies" title="Cookie"
                           style="width: 100px; height: auto" />
                        Cookies n Milk
                     </a>
                  </li>
               </ul>
            </div>

            <div class="uk-navbar-right">

               <ul class="uk-navbar-nav">
                  <li class="uk-active"><a href="./index.php"><span uk-icon="icon: home"></span>Home</a></li>

                  <?php if (!isset($_SESSION['customer'])): ?>
                     <li><a href="login.php"><span uk-icon="icon: sign-in"></span>Log in</a></li>
                     <li><a href="register.php"><span uk-icon="icon: file-edit"></span>Register</a></li>
                  <?php else: ?>
                     <li>
                        <a href="#"><span uk-icon="icon: user"></span>
                           Welcome <?= $_SESSION['customer']['firstname'] ?>
                           <span uk-navbar-parent-icon></span></a>
                        <div class="uk-navbar-dropdown">
                           <ul class="uk-nav uk-navbar-dropdown-nav">
                              <li class="uk-nav-header">Your Details</li>
                              <li><a href="#"><span uk-icon="icon: settings"></span>Profile</a></li>
                              <li><a href="#"><span uk-icon="icon: bag"></span>Orders</a></li>
                              <li><a href="#"><span uk-icon="icon: credit-card"></span>Reciepts</a></li>
                              <li><a href="#"><span uk-icon="icon: refresh"></span>Return</a></li>
                              <li><a href="#"><span uk-icon="icon: heart"></span>Wish list</a></li>
                              <li class="uk-nav-header">Contact</li>
                              <li><a href="#"><span uk-icon="icon: info"></span>Customer service</a></li>
                              <li class="uk-nav-divider"></li>
                              <li><a href="src/auth/logout.php"><span uk-icon="icon: sign-out"></span>Log out</a></li>
                           </ul>
                        </div>
                     </li>
                  <?php endif; ?>
               </ul>

            </div>
         </div>
      </div>
   </nav>