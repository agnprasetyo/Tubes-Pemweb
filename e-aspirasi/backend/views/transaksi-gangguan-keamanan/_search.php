<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiGangguanKeamananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-gangguan-keamanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_gangguan') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jenis_kejahatan') ?>

    <?= $form->field($model, 'id_wilayah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
