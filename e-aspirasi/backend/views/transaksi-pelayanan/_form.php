<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TransaksiPelayanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-pelayanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pelayanan')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'id_wilayah')->textInput() ?>

    <?= $form->field($model, 'jenis_layanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_review')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
