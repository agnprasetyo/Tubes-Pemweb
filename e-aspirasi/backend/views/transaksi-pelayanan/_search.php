<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiPelayananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-pelayanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pelayanan') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'id_wilayah') ?>

    <?= $form->field($model, 'jenis_layanan') ?>

    <?php // echo $form->field($model, 'id_review') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
