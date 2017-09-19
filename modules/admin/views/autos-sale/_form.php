<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AutosSale */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="autos-sale-form">

    <?php $form = ActiveForm::begin([
                  'options' => ['class' => 'form-horizontal'],
                  'fieldConfig' => ['options' => ['class' => 'control-group'],],
                  'errorCssClass' => 'error',

    ]); ?>

    <?= $form->field($model, 'title', [
                'template' => "{label}<div class=controls>{input}<span class='help-inline'>{error}</span></div>",
                'inputOptions' => [
                  'placeholder' => 'Nissan Leaf',
                  'class' => 'span11',
                  ],
       ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content', [
                'template' => "{label}<div class=controls>{input}<span class='help-inline'>{error}</span></div>",
                'inputOptions' => [
                  'placeholder' => 'Content',
                  'class' => 'span11',
                  ],
       ])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image', [
                'template' => "{label}<div class=controls>{input}<span class='help-inline'>{error}</span></div>",
                'inputOptions' => [
                  'placeholder' => 'Image',
                  'class' => 'span11',
                  ],
       ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auto_type_id', [
                'template' => "{label}<div class=controls>{input}<span class='help-inline'>{error}</span></div>",
                'inputOptions' => [
                  'class' => 'span11',
                  ],
       ])->dropdownList($types,

    ['prompt'=>'Select Auto']
        );?>

    <div class="form-actions">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        <?php if (!$model->isNewRecord) : ?>

        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <?php endif; ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
