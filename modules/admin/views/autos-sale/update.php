<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\AutosSale */
$this->title = 'Update Autos Sale: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Autos Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="<?php echo Url::to(['admin/index']); ?>" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a> <a href="#" class="current">Interface elements</a> </div>
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
            <div class="autos-sale-update">

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
  <div class="widget-content">
    <div id="loadAjaxContainer" class="modal hide" aria-hidden="true" style="display: none;">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">×</button>
        <h3>Pop up Header</h3>
      </div>
      <div class="modal-body">
        <p>Here is the text coming you can put also image if you want…</p>
      </div>
    </div>
  </div>
</div>
