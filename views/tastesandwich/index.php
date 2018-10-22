<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TasteSandwichSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Taste Sandwiches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taste-sandwich-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Taste Sandwich', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=> '{view}{update}',
            ],
        ],
    ]); ?>
</div>
