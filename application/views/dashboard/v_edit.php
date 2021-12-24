<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Ubah data
            <small>Control panel</small>
        </h1>
    </section>

    <section class="content">
        <?php foreach ($pariwisata as $prwst) : ?>
            <form action="<?php echo base_url(), 'Dashboard/update'; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Tempat</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $prwst->id ?>">
                    <input type="text" name="nama_tempat" class="form-control" value="<?php echo $prwst->nama_tempat ?>">
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" value="<?php echo $prwst->lokasi ?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="<?php echo $prwst->deskripsi ?>">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                        <div>
                            <img src="<?= base_url('assets/upload/') . $prwst->image ?>" alt="Karawang" width="180" height="120">
                        </div>
                    <input type="file" name="image" id="" class="form-control" value="<?php echo $prwst->image ?>">
                </div>
                <a class="btn btn-danger" href="<?= base_url('Dashboard/index'); ?>">Batal</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        <?php endforeach; ?>
    </section>

</div>
