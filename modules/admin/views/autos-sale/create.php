<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AutosSale */

$this->title = 'Create Autos Sale';
$this->params['breadcrumbs'][] = ['label' => 'Autos Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="#" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a><a href="#" class="current">Index</a>
    </div>
    <h1><?= Html::encode($this->title) ?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?= Html::encode($this->title) ?></h5>
        </div>
        <div class="widget-content nopadding">

<div class="autos-sale-create">

    <?= $this->render('_form', [
        'model' => $model,
        'types' => $types,
    ]) ?>

</div>

  </div>
</div>  
</div>  
</div>  
      </div>
    </div>
    </div>