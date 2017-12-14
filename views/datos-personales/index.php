<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatosPersonalesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datos Personales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-personales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Datos Personales', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'nombres',
            'apellidos',
            'edad',
            'telefono',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
