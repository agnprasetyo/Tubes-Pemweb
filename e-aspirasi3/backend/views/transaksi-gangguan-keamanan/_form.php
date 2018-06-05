<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiGangguanKeamanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-gangguan-keamanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jenis_kejahatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_wilayah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
