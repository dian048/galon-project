<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Galon $model */

$this->title = 'Update Galon: ' . $model->id_galon;
$this->params['breadcrumbs'][] = ['label' => 'Galons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_galon, 'url' => ['view', 'id_galon' => $model->id_galon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="galon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
