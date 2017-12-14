<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DatosPersonales */

$this->title = 'Create Datos Personales';
$this->params['breadcrumbs'][] = ['label' => 'Datos Personales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-personales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
