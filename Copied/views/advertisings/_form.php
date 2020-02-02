<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend2020\models\Advertisings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advertisings-form">

    <div class="row">

        <?php $form = ActiveForm::begin(); ?>

        <div class="col-sm-3">

            <?= $form->field($model, 'sort')->textInput() ?>

            <?=
            $form->field($model, 'photo')->widget(FileInput::class, [
                'options' => ['accept' => 'image/*'],
                'language' => 'ru',
                'pluginOptions' => [
                    'showCaption' => false,
                    'showRemove' => false,
                    'showUpload' => false,
                    'browseClass' => 'btn btn-primary btn-block',
                    'browseLabel' => 'Rasm',
                    'layoutTemplates' => [
                        'main1' => '<div class="kv-upload-progress hide"></div>{remove}{cancel}{upload}{browse}{preview}',
                    ],
                    'initialPreview' => [
                        Html::img($model->getThumbFileUrl('photo', 'sm'), ['class' => 'file-preview-image', 'alt' => '', 'title' => '']),
                    ],
                ],
            ]);
            ?>
        </div>

        <div class="col-sm-6">
            <?= $form->field($model, 'status')->dropDownList($model::statusList()) ?>
        </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
