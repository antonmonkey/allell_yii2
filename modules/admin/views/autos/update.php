<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Autos */

$this->title = 'Update Auto: ' . $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Autos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a> <a href="#" class="current">Interface elements</a> </div>
    <h1>Autos</h1>
  </div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?= Html::encode($this->title) ?></h5>
        </div>
        <div class="widget-content nopadding">
          <div class="autos-update">
            <?= $this->render('_form', [
            'model' => $model,
            ]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>