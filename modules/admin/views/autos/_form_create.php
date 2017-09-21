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

    <?= $form->field($model, 'slug', [
                    'template' => "{label}<div class=controls>{input}<span class='help-inline'>{error}</span></div>",
                    'inputOptions' => [
                      'disabled' => '',
                      'placeholder' => 'It will be changable when updating',
                      'class' => 'span11',
                      ],
           ])->textInput(['maxlength' => true]) ?>

    <div class="control-group field-autos-type required">
      <label class="control-label" for="autos-type">Image</label>
      <div class="controls">
        <p><img src="<?=$model->getImage('img');?>" width="150px" alt=""></p>
          <span class="label label-important">You could add an image later</span>
        <div class="help-block"></div>
      </div>
    </div>
    <div class="control-group field-autos-type required">
      <label class="control-label" for="autos-type">Image Flare</label>
      <div class="controls">
        <p><img src="<?=$model->getImage('imgflare');?>" width="150px" alt=""></p>
            <span class="label label-important">You could add an image later</span>
        <div class="help-block"></div></span>
      </div>
    </div>
    <div class="form-actions">
        <?= Html::submitButton('Create', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>



