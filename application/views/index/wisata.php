<!-- Portfolio Grid-->
<section class="page-section bg-light" id="wisata">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"><b>Tempat Wisata</b></h2>
            <h3 class="section-subheading text-muted">Dibawah yaitu Tempat - tempat wisata di Karawang</h3>
        </div>
        <div class="row">
            <?php foreach ($satasa as $s) : ?>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="wisata-item">
                    <a class="wisata-link" data-bs-toggle="modal" href="#wisataModal<?= $s['id'] ?>">
                        <div class="wisata-hover">
                            <div class="wisata-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/upload/') . $s['image']; ?>" alt=" ..." />
                    </a>
                    <div class="wisata-caption">
                        <div class="wisata-caption-heading"><?= $s['nama_tempat']; ?></div>
                        <div class="wisata-caption-subheading text-muted"><?= $s['lokasi']; ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Portfolio Modals-->

<?php foreach ($satasa as $m) : ?>
<div class="wisata-modal modal fade" id="wisataModal<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img
                    src="<?= base_url('assets/'); ?>imgs/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase"><b><?= $m['nama_tempat']; ?></b></h2>
                            <p class="item-intro text-muted"><?= $m['lokasi']; ?> </p>
                            <img class="img-fluid d-block mx-auto"
                                src="<?= base_url('assets/upload/') . $m['image']; ?>" alt="..." />
                            <p><?= $m['deskripsi']; ?></p>
                            <button class="btn btn-warning btn-lg text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>