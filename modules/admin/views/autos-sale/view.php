<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\AutosSale */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Autos Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="<?php echo Url::to(['admin']); ?>" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a> <a href="#" class="current">View</a> </div>
    <h1>Autos Sale - <?=$this->title?></h1>
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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content:ntext',
            'image',
            'date',
            'auto_type_id',
        ],
    ]) ?>

        <div class="form-actions">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>

</div>

    </div>

  </div>

</div>

          </div>
        </div>
    