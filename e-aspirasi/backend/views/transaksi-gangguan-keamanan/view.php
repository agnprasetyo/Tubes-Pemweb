<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiGangguanKeamanan */
?>
<div class="transaksi-gangguan-keamanan-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_gangguan',
            'id_user',
            'tanggal',
            'jenis_kejahatan',
            'id_wilayah',
            'longitude',
            'latitude',
        ],
    ]) ?>

</div>
