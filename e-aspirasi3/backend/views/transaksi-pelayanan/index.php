<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TransaksiPelayananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaksi Pelayanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-pelayanan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transaksi Pelayanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pelayanan',
            'id_user',
            'tanggal',
            'id_wilayah',
            'jenis_layanan',
            //'id_review',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
