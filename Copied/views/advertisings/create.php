<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend2020\models\Advertisings */

$this->title = Yii::t('app', 'Create Advertisings');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Advertisings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertisings-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
