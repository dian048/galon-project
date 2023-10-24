<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Galon $model */

$this->title = $model->id_galon;
$this->params['breadcrumbs'][] = ['label' => 'Galons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="galon-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_galon' => $model->id_galon], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_galon' => $model->id_galon], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_galon',
            'harga_isi_ulang',
            'jenis_galon',
            'harga_galon',
        ],
    ]) ?>

</div>
