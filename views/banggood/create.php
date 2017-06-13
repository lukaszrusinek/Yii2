<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Banggood */

$this->title = 'Create Banggood';
$this->params['breadcrumbs'][] = ['label' => 'Banggoods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banggood-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
