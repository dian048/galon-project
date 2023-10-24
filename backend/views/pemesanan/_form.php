<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Pemesanan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pemesan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'get_user')->textInput() ?>

    <?= $form->field($model, 'get_galon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
