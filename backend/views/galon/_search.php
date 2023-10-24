<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\common\models\GalonSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="galon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_galon') ?>

    <?= $form->field($model, 'harga_isi_ulang') ?>

    <?= $form->field($model, 'jenis_galon') ?>

    <?= $form->field($model, 'harga_galon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
