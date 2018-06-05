<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiPelayanan */
?>
<div class="transaksi-pelayanan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pelayanan',
            'id_user',
            'tanggal',
            'id_wilayah',
            'id_tempat',
            'jenis_layanan',
            'id_review',
        ],
    ]) ?>

</div>
