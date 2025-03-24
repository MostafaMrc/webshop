<?php
require_once './template/head.inc.php';
?>

<main class="uk-container uk-padding uk-flex uk-flex-middle uk-flex-center">
   <form method="POST" action="src/formhandlers/register.php" class="uk-width-1-1 uk-flex uk-flex-center">
      <div class="uk-card uk-card-default uk-width-4-5 uk-padding-small">
         <div class="uk-card-header uk-flex uk-gap">
            <img src="img/logo.png" class="uk-card-media uk-card-register-logo" alt="Webshop Da Whey"
               title="Webshop Da Whey" style="width: 100px; height: auto;" />
            <h2 class="uk-text-uppercase uk-margin-remove-top">Register</h2>
         </div>
         <!--            <div class="uk-alert-danger" uk-alert>-->
         <!--               <a href class="uk-alert-close" uk-close></a>-->
         <!--               <p>Algemene foutmelding als tijdens de registratie iets niet goed gegaan is</p>-->
         <!--            </div>-->
         <div class="uk-card-body uk-flex uk-flex-between uk-card-body-gap">
            <div class="uk-width-1-1 uk-flex uk-flex-column">
               <div class="">
                  <label for="firstname" class="uk-form-label">First Name<span
                        class="uk-text-xsmall uk-text-italic uk-text-primary"> (Mandatory)</span></label>
                  <input type="text" name="firstname" class="uk-input" id="firstname" placeholder="Firstname..." />
                  <!--                     <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
               </div>
               <div class="uk-flex uk-gap uk-margin-top">
                  <div class="uk-width-1-5">
                     <label for="prefixes" class="uk-form-label">prefixes</label>
                     <input type="text" name="prefixes" class="uk-input" id="prefixes" placeholder="Prefixes..." />
                  </div>
                  <div class="uk-width-4-5">
                     <label for="lastname" class="uk-form-label">Last Name<span
                           class="uk-text-xsmall uk-text-italic uk-text-primary"> (Mandatory)</span></label>
                     <input type="text" name="lastname" class="uk-input" id="lastname" placeholder="Last name..." />
                     <!--                        <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
                  </div>
               </div>

               <div class="uk-flex uk-gap uk-margin-top">
                  <div class="uk-width-3-5">
                     <label for="street" class="uk-form-label">Street<span
                           class="uk-text-xsmall uk-text-italic uk-text-primary"> (Mandatory)</span></label>
                     <input type="text" name="street" class="uk-input" id="street" placeholder="Street..." />
                     <!--                        <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
                  </div>
                  <div class="uk-width-1-5">
                     <label for="housenumber" class="uk-form-label">House Number<span
                           class="uk-text-xsmall uk-text-italic uk-text-primary"> (Mandatory)</span></label>
                     <input type="text" name="housenumber" class="uk-input" id="housenumber"
                        placeholder="House number..." />
                     <!--                        <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
                  </div>
                  <div class="uk-width-1-5">
                     <label for="addition" class="uk-form-label">Additions</label>
                     <input type="text" name="addition" class="uk-input" id="addition" placeholder="Additions..." />
                  </div>
               </div>
               <div class="uk-flex uk-gap uk-margin-top">
                  <div class="uk-width-1-5">
                     <label for="zipcode" class="uk-form-label">Zip code<span
                           class="uk-text-xsmall uk-text-italic uk-text-primary"> (Mandatory)</span></label>
                     <input type="text" name="zipcode" class="uk-input" id="zipcode" placeholder="Zipcode..." />
                     <!--                        <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
                  </div>
                  <div class="uk-width-4-5">
                     <label for="city" class="uk-form-label">Place<span
                           class="uk-text-xsmall uk-text-italic uk-text-primary"> (Mandatory)</span></label>
                     <input type="text" name="city" class="uk-input" id="city" placeholder="Place..." />
                     <!--                        <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
                  </div>
               </div>
               <div class="uk-margin-top">
                  <label for="email" class="uk-form-label">Email<span
                        class="uk-text-xsmall uk-text-italic uk-text-primary"> (Mandatory)</span></label>
                  <input type="email" name="email" class="uk-input" id="email" placeholder="E-mail adress..." />
                  <!--                     <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
               </div>
               <div class="uk-margin-top">
                  <label for="password" class="uk-form-label">Password<span
                        class="uk-text-xsmall uk-text-italic uk-text-primary"> (Mandatory)</span></label>
                  <input type="password" name="password" class="uk-input" id="password" placeholder="Password..." />
                  <!--                     <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
               </div>
               <div class="uk-margin-top">
                  <label for="password-confirm" class="uk-form-label">Password verification<span
                        class="uk-text-xsmall uk-text-italic uk-text-primary"> (Mandatory)</span></label>
                  <input type="password" name="password_confirm" class="uk-input" id="password-confirm"
                     placeholder="Fill password again to confirm..." />
                  <!--                     <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als beide wachtwoorden niet overeenkomen</p>-->
               </div>
            </div>
         </div>
         <div class="uk-card-footer uk-flex uk-flex-between">
            <a href="login.php" class="">Login</a>
            <button class="uk-button uk-button-primary" type="submit">Register</button>
         </div>
      </div>
   </form>
</main>


<?php
require_once './template/foot.inc.php';