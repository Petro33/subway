<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BakedType */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Baked Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baked-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>

</div>
