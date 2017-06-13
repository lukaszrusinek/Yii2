<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BanggoodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banggoods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banggood-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Banggood', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Data:datetime',
            'Nazwa',
            'Link',
            'Cena',
            // 'Kupon',
            // 'Zdjecie',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
