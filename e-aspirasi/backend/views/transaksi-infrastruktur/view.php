<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiInfrastruktur */
?>
<div class="transaksi-infrastruktur-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_infrastruktur',
            'id_user',
            'tanggal',
            'jenis_infrastruktur',
            'longitude',
            'latitude',
            'id_status',
            'tanggal_input',
            'id_wilayah',
        ],
    ]) ?>

</div>
