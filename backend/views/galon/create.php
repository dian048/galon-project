<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Galon $model */

$this->title = 'Create Galon';
$this->params['breadcrumbs'][] = ['label' => 'Galons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
