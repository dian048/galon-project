<?php

use common\models\Galon;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\common\models\GalonSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Galons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galon-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Galon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_galon',
            'harga_isi_ulang',
            'jenis_galon',
            'harga_galon',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Galon $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_galon' => $model->id_galon]);
                 }
            ],
        ],
    ]); ?>


</div>
