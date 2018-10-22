<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;
use app\models\Bread;
use yii\helpers\ArrayHelper;
use app\models\Rate;
use app\models\BreadSize;
use app\models\BakedType;
use app\models\TasteSandwich;
use app\models\Extras;
use app\models\Vegetables;
use app\models\Sauce;


/* @var $this yii\web\View */
/* @var $searchModel app\models\MealSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Meals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
            if(User::isAdmin()){
                echo Html::a('Create Meal', ['create'], ['class' => 'btn btn-success']);
            }
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'user_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'user_id',
                    ArrayHelper::map(User::find()->all(), 'id', 'name'),
                    ['class' => 'form-control', 'prompt' => '']
                ),
                'value' => 'user.username',
                'visible' =>  User::isAdmin() ? true : false,
            ],
            [
                'attribute' => 'rate_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'rate_id',
                    ArrayHelper::map(Rate::find()->all(), 'id', 'name'),
                    ['class' => 'form-control', 'prompt' => '']
                ),
                'value' => 'rate.name'
            ],
            'name',
            [
                'attribute' => 'bread_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'bread_id',
                    ArrayHelper::map(Bread::find()->all(), 'id', 'name'),
                    ['class' => 'form-control', 'prompt' => '']
                ),
                'value' => 'bread.name'
            ],
            [
                'attribute' => 'bread_size_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'bread_size_id',
                    ArrayHelper::map(BreadSize::find()->all(), 'id', 'name'),
                    ['class' => 'form-control', 'prompt' => '']
                ),
                'value' => 'breadSize.name'
            ],
            [
                'attribute' => 'baked_type_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'baked_type_id',
                    ArrayHelper::map(BakedType::find()->all(), 'id', 'name'),
                    ['class' => 'form-control', 'prompt' => '']
                ),
                'value' => 'bakedType.name'
            ],
            [
                'attribute' => 'taste_sandwich_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'taste_sandwich_id',
                    ArrayHelper::map(TasteSandwich::find()->all(), 'id', 'name'),
                    ['class' => 'form-control', 'prompt' => '']
                ),
                'value' => 'tasteSandwich.name'
            ],
            [
                'attribute' => 'extras_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'extras_id',
                    ArrayHelper::map(Extras::find()->all(), 'id', 'name'),
                    ['class' => 'form-control', 'prompt' => '']
                ),
                'value' => 'extras.name'
            ],
            [
                'attribute' => 'vegetables_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'vegetables_id',
                    ArrayHelper::map(Vegetables::find()->all(), 'id', 'name'),
                    ['class' => 'form-control', 'prompt' => '']
                ),
                'value' => 'vegetables.name'
            ],
            [
                'attribute' => 'sauce_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'sauce_id',
                    ArrayHelper::map(Sauce::find()->all(), 'id', 'name'),
                    ['class' => 'form-control', 'prompt' => '']
                ),
                'value' => 'sauce.name'
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=> User::isAdmin() ? '{view}{update}' : '{view}{update}',
            ],
        ],
    ]); ?>
</div>
