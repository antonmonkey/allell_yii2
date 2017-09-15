<!-- page aoutos -->
<section class="single-page page-autos">
  <div class="container">
      <div class="row">
        <div class="intro-text text-center">
          <h2 class="section-heading">Автомобили</h2>
        </div>                  
      </div>
      <!-- loop -->
      <div class="row text-center">

      <?php foreach ($autos as $auto) : ?>

        <div class="col-md-4 col-sm-6 col-centered autos-page-item">
          <div class="autos-page-item-img">
           <img src="/public/images/<?=$auto['imgflare'];?>" alt="image-226" title="image-226" class="flicking-image img-responsive">
           <img src="public/images/<?=$auto['img'];?>" alt="image-226" title="image-226" class="img-responsive">
          </div>
          <hr width="75%" class="page-autos-line">
          <h3><?=$auto['type'];?></h3>
          <div class="btn-wrap-autos-page">
            <a href="http://allelectrics.com.ua/autos/nissan-leaf/" class="page-scroll btn btn-xl btn-autos-page">Подробнее</a>
          </div>
        </div>

      <?php endforeach; ?>
        
      </div> 
      <!-- end loop -->
  </div>
</section>  
<!-- end page uatos -->