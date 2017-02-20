<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Inventori */

$this->title = 'Create Inventori';
$this->params['breadcrumbs'][] = ['label' => 'Inventoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
