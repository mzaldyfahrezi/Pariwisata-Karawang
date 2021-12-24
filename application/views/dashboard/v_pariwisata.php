<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Pariwisata Karawang
            <small>Control panel</small>
        </h1>
    </section>

    <section class="content">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fa fa-plus"></i> Tambah Wisata
        </button>

        <br>
        <br>
        <table class="table">
            <th>#</th>
            <th>Nama Tempat Wisata</th>
            <th>Lokasi</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Opsi</th>
            <?php
            $a = 1;
            foreach ($content as $c) {
            ?>

                <tr>
                    <td> <?= $a++; ?></td>
                    <td> <?= $c['nama_tempat']; ?></td>
                    <td> <?= $c['lokasi']; ?></td>
                    <td> <?= $c['deskripsi']; ?></td>
                    <td><img src="<?= base_url('assets/upload/') . $c['image']; ?>" alt="Karawang" width="180" height="120">
                    </td>
                    <td><?php echo anchor('Dashboard/edit/' . $c['id'], '<button class="btn btn-success"><i class="fa fa-pencil"></i></button>') ?>
                    </td>
                    <td onclick="javascript: return confirm('Apakah anda yakin data ini ingin di hapus ?')">
                        <?php echo anchor('Dashboard/hapus/' . $c['id'], '<button class="btn btn-danger"><i class="fa fa-trash"></i></button>'); ?>
                    </td>

                </tr>

            <?php } ?>
        </table>
    </section>

    <!-- Modal -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Wisata Karawang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="<?= base_url('pariwisata/insertWisata'); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <div>
                                <small><b>Nama Tempat Wisata</small>
                                <input type="text" name="nama_tempat" id="" class="form-control">
                            </div>
                            <div>
                                <small><b>Lokasi</small>
                                <input type="text" name="lokasi" id="" class="form-control">
                            </div>
                            <div>
                                <small><b>Deskripsi Tempat Wisata</small>
                                <input type="text" name="deskripsi" id="" class="form-control">
                            </div>
                            <div>
                                <small><b>Gambar</b></small>
                                <input type="file" name="image" id="" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Ulang</button>
                            <button type="submit" name="submit" class="btn btn-info">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End modal -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</div>
