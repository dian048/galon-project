<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Pemesanan $model */

$this->title = 'Create Pemesanan';
$this->params['breadcrumbs'][] = ['label' => 'Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
