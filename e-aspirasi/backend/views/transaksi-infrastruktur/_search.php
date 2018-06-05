<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiInfrastrukturSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-infrastruktur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_infrastruktur') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jenis_infrastruktur') ?>

    <?= $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'id_status') ?>

    <?php // echo $form->field($model, 'tanggal_input') ?>

    <?php // echo $form->field($model, 'id_wilayah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
