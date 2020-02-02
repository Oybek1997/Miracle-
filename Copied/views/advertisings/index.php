<?php

use backend2020\models\Advertisings;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend2020\models\AdvertisingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Advertisings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertisings-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create Advertisings'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= Html::beginForm(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'sort',
            [
                'attribute' => 'status',
                'value' => function (Advertisings $model) {
                    return $model->getStatusName($model->status);
                },
                'filter' => Html::activeDropDownList($searchModel, 'status', Advertisings::statusList(), ['class' => 'form-control', 'prompt' => '---']),
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?= Html::endForm(); ?>
</div>
