<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Autos */

$this->title = 'Create Auto';
$this->params['breadcrumbs'][] = ['label' => 'Autos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div id="content">

  <div id="content-header">

    <div id="breadcrumb"> <a href="#" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a> <a href="#" class="current">Interface elements</a> </div>

    <h1><?= Html::encode($this->title) ?></h1>

  </div>

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Create new type of auto</h5>
          </div>
          <div class="widget-content nopadding">

            <?= $this->render('_form_create', [
                'model' => $model,
            ]) ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>



