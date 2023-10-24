<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Galon $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="galon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'harga_isi_ulang')->textInput() ?>

    <?= $form->field($model, 'jenis_galon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_galon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
