<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiPelayanan */

$this->title = 'Update Transaksi Pelayanan: ' . $model->id_pelayanan;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Pelayanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pelayanan, 'url' => ['view', 'id' => $model->id_pelayanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-pelayanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
