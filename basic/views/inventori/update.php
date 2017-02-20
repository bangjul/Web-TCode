<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inventori */

$this->title = 'Update Inventori: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inventoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
