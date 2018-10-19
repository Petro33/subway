<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;

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
            User::isAdmin() ? 'user_id' : 'rate_id',
            'name',
            'bread_id',
            'bread_size_id',
            'baked_type_id',
            //'taste_sandwich_id',
            //'extras_id',
            //'vegetables_id',
            //'sauce_id',
            //'user_id',
            //'rate_id',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=> User::isAdmin() ? '{view}{update}{delete}' : '{view}{update}',
            ],
        ],
    ]); ?>
</div>
