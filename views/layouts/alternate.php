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