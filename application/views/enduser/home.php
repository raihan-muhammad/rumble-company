<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $no = 0; for($no; $no < 5; $no++): ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $no ?>" class="<?php if($no == 0){ echo "active"; } ?>"></li>
        <?php endfor; ?>
    </ol>
    
    <div class="carousel-inner">
        <?php $no = 0; foreach($slider->result() as $s): ?>
        <div class="carousel-item <?php if($no == 0){ echo "active"; } else { echo "";}?>">
            <img src="<?= base_url('assets/img/slider/'.$s->gambar_slider) ?>" class="d-block w-100" alt="<?= $s->nama_slider; ?>">
        </div>
        <?php $no++; endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php foreach($bg_alur->result() as $t): ?>
<div class="jumbotron jumbotron-fluid my-auto" style="background-color: <?= $t->warna ?>;">
    <div class="container pt-4">
        <div class="row">
            <?php foreach($step->result() as $a) : ?>
            <div class="col-sm">
                <div class="circle mx-auto desc"></div>
                <p class="lead1 pt-4"> <?= $a->nama_alur ?>
                </p>
            </div>
            <div class="kotak mt-2 mx-auto mb-4">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endforeach;?>

</div>
<div class="jumbotron jumbotron-fluid my-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 ">
                <div class="top-card">
                    <p class="text-card">RUMBLE'S<br>MOMENT</p>
                </div>
                <div class="card" style="height: 31rem;">

                    <img src="assets/img/wil-stewart-AjvgNTbyuG8-unsplash.jpg" style="width: 100%; height: 100%;"
                        class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col-md-4 col-12 card1">
                <div class="top-card-r">
                    <p class="text-card">RUMBLE'S<br>DESIGN & PRINT</p>
                </div>
                <div class="card" style="height: 31rem;">
                    <img src="assets/img/wil-stewart-AjvgNTbyuG8-unsplash.jpg" style="width: 100%; height: 100%;"
                        class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col-md-4 col-12 card2">
                <div class="top-card-r">
                    <p class="text-card">RUMBLE'S<br>DECOR</p>
                </div>
                <div class="card1" style="height: 31rem;">
                    <img src="assets/img/wil-stewart-AjvgNTbyuG8-unsplash.jpg" style="width: 100%; height: 100%;"
                        class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-fluid my-auto" style="background-color: #a4b0cb;">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="assets/img/BRANDING RUMBLE'S-01.jpg" class="img-fluid" style="width: 80%;"
                    alt="Responsive Image">
            </div>
            <div class="col-sm">
                <p class="lead4">Hey!</p>
                <p class="lead2 pt-5"><span class="lead3">IT'S NISA & YUDI<br></span>An entreprenuer, creative
                    thinker,<br>
                    unwavering optimist & donut enthusiast<br>
                    devoted to helping you and the courage<br>
                    and confidence to be authentically you.
            </div>
            </p>
        </div>
    </div>
</div>