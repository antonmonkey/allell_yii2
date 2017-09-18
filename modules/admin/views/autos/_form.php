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

    <div class="control-group field-autos-type required">
      <label class="control-label" for="autos-type">Image</label>
      <div class="controls">
        <p><img src="<?= $model->getImage('img') ?>" width="150px" alt=""></p>
        
        <?php if($model->isNewRecord) {
            
           echo '<span class="label label-important">You could add an image later</span>'; } else {
              
              echo '<a href="#loadAjaxContainer" data-toggle="modal" data-link="set-image?id=' . $model->id . '&tag=img" class="btn btn-primary modal-add-image">Add image</a>';

              } ?>

        <div class="help-block"></div></span>
      </div>
    </div>
    <div class="control-group field-autos-type required">
      <label class="control-label" for="autos-type">Image Flare</label>
      <div class="controls">
        <p><img src="<?= $model->getImage(imgflare) ?>" width="150px" alt=""></p>

        <?php if($model->isNewRecord) : ?>

            <span class="label label-important">You could add an image later</span>
            
            <?php  else : ?> 
              
            <a href="#loadAjaxContainer" data-toggle="modal" data-link="set-image?id=<?=$model->id?>&tag=imgflare" class="btn btn-primary modal-add-image">Add image</a>

            <?php  endif; ?>

        <div class="help-block"></div></span>
      </div>
    </div>
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



