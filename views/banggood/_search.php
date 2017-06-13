<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BanggoodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banggood-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Data') ?>

    <?= $form->field($model, 'Nazwa') ?>

    <?= $form->field($model, 'Link') ?>

    <?= $form->field($model, 'Cena') ?>

    <?php // echo $form->field($model, 'Kupon') ?>

    <?php // echo $form->field($model, 'Zdjecie') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
