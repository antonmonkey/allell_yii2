<!-- page aoutos -->
<section class="single-page page-autos">
  <div class="container">
      <div class="row">
        <div class="intro-text text-center">
          <h2 class="section-heading">Автомобили</h2>
        </div>                  
      </div>
      <!-- loop -->
      <?php if ($r) : ?>
        <?php foreach($r as $auto): ?>
        
        <div class="row single-auto-block">
          <div class="col-md-12 col-sm-8 col-sm-offset-2 col-md-offset-0 single-auto-content-title">
            <p id="autoModel"><?=$auto['title']?></p>
          </div>
          <div class="col-md-5 col-sm-8 col-sm-offset-2 col-md-offset-0" style="padding: 0;">
            <div class="auto-imgs-slider">
            <?php if ($auto['image']) : ?>
              <div><img src="/uploads/<?=$auto['image']?>" alt="" title="" class="img-responsive"></div>
              <div><img src="/uploads/<?=$auto['image']?>" alt="" title="" class="img-responsive"></div>
              <div><img src="/uploads/<?=$auto['image']?>" alt="" title="" class="img-responsive"></div>
              <div><img src="/uploads/<?=$auto['image']?>" alt="" title="" class="img-responsive"></div>
            <?php else : ?>
              <h3>NO IMAGES WERE FOUND</h3>
            <?php endif; ?>
            </div>
            <div class="auto-imgs-slider-vfx"><img src="/public/images/auto-imgs-slider-vfx-cropped.png" alt="" class="img-responsive"></div>
          </div>
          <div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-1 single-auto-content">
            <div class="single-auto-contant-text-wrap">
              <div class="single-auto-contant-text">
                <?=$auto['content']?>
              </div>
            </div>
            <img src="/public/images/bg-single-auto-content.png" alt="<?='img'?>" class="img-responsive image-single-auto-bg">
            <div class="single-auto-page-btn">
              <div class="row">
                <div class="col-md-4 col-4 col-sm-4 btn-carfax">
                  <button type="button" class="page-scroll btn btn-xl btn-autos-page" data-toggle="modal" data-target=".bs-modal-carfax"><img src="/public/images/carfax.png" alt="" title="" class="img-responsive"></button>
                </div>
                <div class="col-md-4 col-4 col-sm-4 btn-carfax">
                  <button id="testdrive" type="button" class="page-scroll btn btn-xl btn-autos-page" data-toggle="modal" data-target=".bs-modal-form">Тест-драйв</button>
                </div>
                <div class="col-md-4 col-4 col-sm-4 btn-carfax">
                  <button id="rentcar" type="button" class="page-scroll btn btn-xl btn-autos-page" data-toggle="modal" data-target=".bs-modal-form-rentcar">Аренда</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php endforeach; ?>
      <!-- end loop -->
    <?php else: ?>
      <div class="row text-center">
        <h5><?='Автомобилей в данной категории не найдено'?></h5>
      </div>
    <?php endif; ?>
  </div>
</section>  
<!-- end page uatos -->