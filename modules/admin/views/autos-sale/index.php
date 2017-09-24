<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AutosSaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Autos Sales';
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
      <div class="span6">
        <div class="widget-box">
            <div class="widget-title"><span class="icon"> <i class="icon-list"></i></span>
              <h5>Autos Types List</h5>
            </div>
            <div class="widget-content">
              <ul class="recent-posts">
                <li>
                  <?= Html::a('Add auto', ['create'], ['class' => 'btn btn-success']) ?>
                </li>
                <?php foreach ($autos as $auto) : ?>
                <li>
                  <div class="auto-type-thumb">
                    <img src="<?= $auto->getImage('image');?>" width="100px" alt="car">
                  </div>
                  <div class="article-post">
                    <div class="fr">
                      <?= Html::a('Update', ['update', 'id' => $auto->id], ['class' => 'btn btn-primary btn-mini']) ?>
                      <?= Html::a('Delete', ['delete', 'id' => $auto->id], [
                          'class' => 'btn btn-danger btn-mini',
                          'data' => [
                              'confirm' => 'Are you sure you want to delete this item?',
                              'method' => 'post',
                          ],
                        ]) ?></div>
                    <p>Title: <?=$auto['title'];?></p>
                    <p>Type: <?=$types[$auto['auto_type_id']];?></p>
                    <p>Content: <?=strip_tags(substr($auto['content'], 0, 100)) . '...';?></p>
                    <span class="user-info"><?='Updated:' . $auto['date'];?></span>
                  </div>
                </li>
                <?php endforeach ; ?>
              </ul>
            </div>
          </div>
      </div>
      <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>
  </div>
</div> 