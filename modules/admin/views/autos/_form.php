<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Autos */
/* @var $form yii\widgets\ActiveForm */
?>


    <?php $form = ActiveForm::begin([
                  'options' => ['class' => 'form-horizontal'],
                  'fieldConfig' => ['options' => ['class' => 'control-group'],],
                  'errorCssClass' => 'error',

    ]); ?>

    <?= $form->field($model, 'type', [
                    'template' => "{label}<div class=controls>{input}<span class='help-inline'>{error}</span></div>",
                    'inputOptions' => [
                      'placeholder' => 'Nissan Leaf',
                      'class' => 'span11',
                      ],
           ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img', [
                    'template' => '{label}<div class=controls>{input}</div>',
                    'inputOptions' => [
                      'placeholder' => $model->getAttributeLabel('img'),
                      'class' => 'span11',
                      ],
           ])->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'imgflare', [
                    'template' => '{label}<div class=controls>{input}</div>',
                    'inputOptions' => [
                      'placeholder' => $model->getAttributeLabel('imgflare'),
                      'class' => 'span11',
                      ],
           ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created', [
                    'template' => '{label}<div class=controls>{input}</div>',
                    'inputOptions' => [
                      'data-date' => '',
                      'data-date-format' =>'dd-mm-yyyy',
                      'value' => '',
                      'class' => 'span11', //datepicker
                      ],
           ])->textInput(['maxlength' => true]) ?>
    <div class="control-group field-autos-type required">
      <label class="control-label" for="autos-type">Add image</label>
      <div class="controls">
        <?= Html::a('Add image', ['set-image', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <div class="help-block"></div></span>
      </div>
    </div>
    <div class="form-actions">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



