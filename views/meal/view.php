<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Meal */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Meals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
            echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
//            Html::a('Delete', ['delete', 'id' => $model->id], [
//                'class' => 'btn btn-danger',
//                'data' => [
//                    'confirm' => 'Are you sure you want to delete this item?',
//                    'method' => 'post',
//                ],
//            ]);
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'label' => 'Bread',
                'value' => $model->bread->name
            ],
            [
                'label' => 'Bread Size',
                'value' => $model->breadSize->name
            ],
            [
                'label' => 'Baked Type',
                'value' => $model->bakedType->name
            ],
            [
                'label' => 'Taste Sandwich',
                'value' => $model->tasteSandwich->name
            ],
            [
                'label' => 'Extras',
                'value' => $model->extras->name
            ],
            [
                'label' => 'Bread',
                'value' => $model->bread->name
            ],
            [
                'label' => 'Vegetables',
                'value' => $model->vegetables->name
            ],
            [
                'label' => 'Sauce',
                'value' => $model->sauce->name
            ],
            [
                'label' => 'Rate',
                'value' => $model->rate->name
            ],
        ],
    ]) ?>

</div>
