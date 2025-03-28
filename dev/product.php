<?php

if (!isset($_GET['product_id'])) {
   header('Location: index.php');
   exit();
}

$product_id = intval($_GET['product_id']);

require_once './src/Database/Database.php';
$sql = 'SELECT * FROM products WHERE id = :product_id';
$placeholders = [':product_id' => $product_id];

Database::query($sql, $placeholders);
$product = Database::get();

require_once './src/auth/messages.php';

require_once './template/head.inc.php';
?>

<main class="uk-container uk-padding">
   <div class="uk-grid">
      <section class="uk-width-1">
         <div class="uk-grid uk-card uk-card-default">
            <section class="uk-width-1-2 uk-card-media-left">
               <img src="img/<?= $product['image'] ?>" class="" alt="" title="" />
            </section>
            <section class="uk-width-1-2 uk-card-body uk-flex uk-flex-column uk-flex-between">
               <div class="">
                  <h1>
                     <?= $product['name'] ?>
                  </h1>
                  <p class="">
                     <?= $product['description'] ?>
                  </p>
               </div>
               <div class="uk-flex uk-flex-between uk-flex-middle">
                  <div class="price-block">
                     <p class="product-view__price uk-text-bold uk-text-danger uk-text-left uk-text-bolder">
                        &euro; <?= $product['price'] ?>
                     </p>
                  </div>
                  <div>
                     <button class="uk-button uk-button-primary">
                        <span uk-icon="icon: cart"></span>
                        In Shopping cart
                     </button>
                  </div>
               </div>
            </section>
         </div>
      </section>
   </div>
</main>

<?php
require_once './template/foot.inc.php';