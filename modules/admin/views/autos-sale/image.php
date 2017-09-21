<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Autos */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Add image';
?>

<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5><?= Html::encode($this->title) ?></h5>
      </div>
      <div class="widget-content nopadding">

        <?php $form = ActiveForm::begin([
                      'options' => ['class' => 'form-horizontal'],
                      'fieldConfig' => ['options' => ['class' => 'control-group'],],
                      'errorCssClass' => 'error',
        ]); ?>

        <?= $form->field($model, 'image', [
                  'template' => "{label}<div class=controls>{input}<span class='help-inline'>{error}</span></div>",
                  'inputOptions' => [
                    'placeholder' => 'Nissan Leaf',
                    'class' => 'span11',
                    ],
         ])->fileInput(['maxlength' => true]) ?>
      

        <div class="form-actions">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

      </div>
    </div>
  </div>
  </div>