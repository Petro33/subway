<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sauce */

$this->title = 'Create Sauce';
$this->params['breadcrumbs'][] = ['label' => 'Sauces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sauce-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
