<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BreadSize */

$this->title = 'Create Bread Size';
$this->params['breadcrumbs'][] = ['label' => 'Bread Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bread-size-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
