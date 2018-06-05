<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiGangguanKeamanan */

$this->title = $model->id_gangguan;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Gangguan Keamanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-gangguan-keamanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_gangguan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_gangguan], [
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
            'id_gangguan',
            'id_user',
            'tanggal',
            'jenis_kejahatan',
            'id_wilayah',
        ],
    ]) ?>

</div>
