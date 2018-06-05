<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TransaksiInfrastrukturSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaksi Infrastrukturs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-infrastruktur-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transaksi Infrastruktur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_infrastruktur',
            'id_user',
            'tanggal',
            'jenis_infrastruktur',
            'id_status',
            //'tanggal_input',
            //'id_wilayah',
            //'id_bukti',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
