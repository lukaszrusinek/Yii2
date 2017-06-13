<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Banggood */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banggood-form">

    <?php $form = ActiveForm::begin(); ?>

   <!-- <?//= $form->field($model, 'Data')->textInput() ?>-->

    <?= $form->field($model, 'Nazwa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cena')->textInput() ?>

    <?= $form->field($model, 'Kupon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Zdjecie')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
