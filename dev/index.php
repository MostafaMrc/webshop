<?php

require_once './src/auth/messages.php';
require_once './src/Database/Database.php';

$products = [];

Database::query("SELECT * FROM products");
$products = Database::getAll();

require_once './template/head.inc.php';
?>

<!-- DIT IS DE PAGINA SPECIFIEKE HTML CODE -->
<main class="uk-container uk-padding">
   <!-- TODO: Onderstaande code pas tonen wanneer er ook echt een melding is -->
   <?php if (hasMessage('login_success')): ?>
      <div class="uk-alert-success" uk-alert>
         <a href class="uk-alert-close" uk-close></a>
         <p>
            <?= getMessage('login_success'); ?>
         </p>
      </div>
   <?php endif; ?>
   <div class="uk-grid">
      <section class="uk-width-1-5">
         <h4>Categories</h4>
         <hr class="uk-divider" />
         <div>
            <input class="uk-checkbox" id="chickens" type="checkbox" name="cookies" />
            <label for="chickens">Cookies</label>
         </div>
         <div>
            <input class="uk-checkbox" id="paint" type="checkbox" name="milk" />
            <label for="paint">Milk</label>
         </div>
         <div>
            <input class="uk-checkbox" id="machines" type="checkbox" name="cookiebaskets" />
            <label for="machines">Cookie baskets</label>
         </div>

      </section>
      <section class="uk-width-4-5">
         <h4 class="uk-text-muted uk-text-small">Chosen categories: <span
               class="uk-text-small uk-text-primary">All</span></h4>
         <div class="uk-flex uk-flex-home uk-flex-wrap">

            <!-- PRODUCT KAART -->
            <?php foreach ($products as $product): ?>
               <a class="product-card uk-card uk-card-home uk-card-default uk-card-small uk-card-hover"
                  href="product.php?product_id=<?= $product['ID'] ?>">
                  <div class="uk-card-media-top uk-align-center">
                     <img src="img/<?php echo $product['image'] ?>" alt="" class="product-image uk-align-center">
                  </div>
                  <div class="uk-card-body uk-card-body-home">
                     <p class="product-card-p" style="font-size: 20px;">
                        <?php echo $product['name'] ?>
                     </p>
                     <p class="product-card-p">
                        <?php echo $product['description'] ?>
                     </p>
                     <p class="product-card-p uk-text-large uk-text-bold uk-text-danger uk-text-right">
                        &euro; <?php echo $product['price'] ?>
                     </p>
                  </div>
               </a>
            <?php endforeach; ?>
            <!-- EINDE PRODUCT KAART -->

         </div>
      </section>
   </div>
</main>


<?php
require_once './template/foot.inc.php';

