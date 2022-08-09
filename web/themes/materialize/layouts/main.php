<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo $this->theme->baseUrl ?>/assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo $this->theme->baseUrl ?>/assets/css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body>
      <?php $this->beginBody(); ?>
      <div class="container">
      <nav>
        <div class="nav-wrapper">
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
          <?php
                       $navItems = [
                        ['label' => 'Home', 'url' => ['site/index']],
                        ['label' => 'New Vistitor', 'url' => ['visitor/create']],
                        ['label' => 'Prayer', 'url' => ['prayers/create']],
                        ['label' => 'Events', 'url' => ['site/about']],
                        
                    ];
              echo Menu::widget([
                'options' => [
                  "class" => "right hide-on-med-and-down"
                ],
                'items' => $navItems
              ]);
              
              echo Menu::widget([
                'options' => [
                  "id" => "mobile-demo",
                  "class" => "side-nav"
                ],
                'items' => $navItems
              ]);
            ?>
        </div>
      </nav>
      </div>
      <div class="container main-content white-text">
        <div class="col s12">
          <?php echo $content; ?>
        </div>

        <div class="row">
          <div class="col m4 s12">
            <!-- Promo Content 1 goes here -->
            <div class="card grey-text">
              <div class="card-image">
              <a href="http://dev.imaginationnetsolutions.com/site/visitor"><img src="<?php echo $this->theme->baseUrl ?>/assets/images/visitor.png"></a> 
              </div>
              <div class="card-content">
                <span class="card-title grey-text">New Visitor</span>
                  <p>Stay Connected?  Fill out our new visitor information to stay informed.</p>
              </div>
              <div class="card-action">

                
              </div>
            </div>
          </div>
          <div class="col m4 s12">
            <!-- Promo Content 2 goes here -->
            <div class="card grey-text">
              <div class="card-image">
              <a href="http://dev.imaginationnetsolutions.com/site/prayer"><img src="<?php echo $this->theme->baseUrl ?>/assets/images/prayer.png"></a>
              </div>
              <div class="card-content">
                <span class="card-title grey-text">Prayer</span>
                  <p>Need Prayer?  Well scan the code and tell us how we can hold you up.</p>
              </div>
              <div class="card-action">

              </div>
            </div>
          </div>
          <div class="col m4 s12">
            <!-- Promo Content 3 goes here -->
            <div class="card grey-text">
              <div class="card-image">
              <a href="http://dev.imaginationnetsolutions.com/site/about"><img src="<?php echo $this->theme->baseUrl ?>/assets/images/about.png"></a>
              </div>
              <div class="card-content">
                <span class="card-title grey-text">Events</span>
                  <p>Whats Going On!  This is the place to discover just that, our events page.</p>
              </div>
              <div class="card-action">

              </div>
            </div>

          </div>
        </div>
      </div>

      <footer class="">
        <div class="container">
          <div class="row center-align grey-text">
            <div class="col s12">
              
            </div>
          </div>
        </div>
      </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/assets/js/app.js"></script>
      <?php $this->endBody() ?>
    </body>
  </html>
<?php $this->endPage(); ?>