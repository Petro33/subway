<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TasteSandwich */

$this->title = 'Create Taste Sandwich';
$this->params['breadcrumbs'][] = ['label' => 'Taste Sandwiches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taste-sandwich-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
