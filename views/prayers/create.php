<?php

use yii\helpers\Html;
$this->context->layout = 'plain';
/* @var $this yii\web\View */
/* @var $model app\models\Prayers */

$this->title = 'Prayer Requests';
/* $this->params['breadcrumbs'][] = ['label' => 'Prayers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title; */
?>
<div class="prayers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
