<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;
rmrevin\yii\fontawesome\AssetBundle::register($this);

/* @var $this \yii\web\View */
/* @var $content string */

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container nav-menu-container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="/">
                <img alt="Brand" src="public/images/small-logo.png" class="img-responsive">
              </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden active">
                      <a href="#page-top"></a>
                  </li>
                  <li class="">
                      <a class="page-scroll" href="/auto">Автомобили</a>
                  </li>
                  <li class="">
                      <a class="page-scroll" href="/eshop">E-магазин</a>
                  </li>
                  <li class="">
                      <a class="page-scroll" href="/services">Услуги</a>
                  </li>
                  <li class="">
                      <a class="page-scroll" href="/blog">Блог</a>
                  </li>
                  <li class="">
                      <a class="page-scroll" href="/contact">Контакты</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>
  <div class="grey-line-under-nav"></div>
  
  <?php echo $content;?>

  <!-- section footer -->
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <span class="copyright">Все права защищены © Allelectrics 2017</span>
              </div>
              <div class="col-md-4 col-md-offset-4">
                  <ul class="list-inline social-buttons">
                      <li><a href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li><a href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
