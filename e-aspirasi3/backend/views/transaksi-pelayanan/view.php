<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiPelayanan */

$this->title = $model->id_pelayanan;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Pelayanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-pelayanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pelayanan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pelayanan], [
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
            'id_pelayanan',
            'id_user',
            'tanggal',
            'id_wilayah',
            'jenis_layanan',
            'id_review',
        ],
    ]) ?>

</div>
