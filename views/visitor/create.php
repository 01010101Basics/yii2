<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Visitor */
$this->context->layout = 'plain';
$this->title = 'Welcome';
//$this->params['breadcrumbs'][] = ['label' => 'Visitors', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visitor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
