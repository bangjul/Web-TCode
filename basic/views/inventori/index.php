<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InventoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventori-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inventori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            'waktu',
            'id_petugas',
            'nama_petugas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
