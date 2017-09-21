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
            <img src="/uploads/<?=$auto['imgflare'];?>" alt="image" title="image" class="flicking-image img-responsive">
            <img src="/uploads/<?= $auto['img'] ? $auto['img'] : '';?>" alt="image" title="image" class="img-responsive">
          </div>
          <hr width="75%" class="page-autos-line">
          <h3><?=$auto['type'];?></h3>
          <div class="btn-wrap-autos-page">
            <a href="/autos/<?=$auto['slug'];?>" class="page-scroll btn btn-xl btn-autos-page">Подробнее</a>
          </div>
        </div>

      <?php endforeach; ?>
        
      </div> 
      <!-- end loop -->
  </div>
</section>  
<!-- end page uatos -->