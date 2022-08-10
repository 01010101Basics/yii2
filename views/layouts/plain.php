<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <style type="text/css">
        body {
  background: url(<?php echo $this->theme->baseUrl ?>/assets/images/ala_background_cropped.jpg) no-repeat top center #1b1919;
}
form {
    background-color: rgba(0, 0, 0, 0.5);
    color: lightgrey;
    padding: 1em;
}
 .container{
    background-color: rgba(0, 0, 0, 0.5);
    color: lightgrey;
    
}
.footer, .myfooter {
    background-color: rgba(0, 0, 0, 0.5);
    font-size: .9em;
    height: 60px;
}

.footer , .myfooter > .container {
    padding-right: 15px;
    padding-left: 15px;
}

h1, h2, h3, h4 {
    color: lightgrey;
}

    </style>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $navItems = [
        ['label' => 'Home', 'url' => ['site/index']],
        ['label' => 'New Vistitor', 'url' => ['visitor/create']],
        ['label' => 'Prayer', 'url' => ['prayers/create']],
        ['label' => 'Events', 'url' => ['site/about']],
        
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $navItems,
        
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="myfooter">
    <div class="container">
        <p class="float-left">&copy; Awaken LA Church <?= date('Y') ?></p>
        
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
