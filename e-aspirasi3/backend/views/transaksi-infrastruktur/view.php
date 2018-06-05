<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiInfrastruktur */

$this->title = $model->id_infrastruktur;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Infrastrukturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-infrastruktur-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_infrastruktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_infrastruktur], [
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
            'id_infrastruktur',
            'id_user',
            'tanggal',
            'jenis_infrastruktur',
            'id_status',
            'tanggal_input',
            'id_wilayah',
            'id_bukti',
        ],
    ]) ?>

</div>
