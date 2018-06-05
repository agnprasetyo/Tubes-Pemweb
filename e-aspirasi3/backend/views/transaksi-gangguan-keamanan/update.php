<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiGangguanKeamanan */

$this->title = 'Update Transaksi Gangguan Keamanan: ' . $model->id_gangguan;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Gangguan Keamanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_gangguan, 'url' => ['view', 'id' => $model->id_gangguan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-gangguan-keamanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
