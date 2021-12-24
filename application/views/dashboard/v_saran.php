<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Saran
            <small>Control panel</small>
        </h1>
    </section>

    <section class="content">
        <table class="table">
            <th>#</th>
            <th>Nama pemberi Kritik&Saran</th>
            <th>E-mail</th>
            <th>No. Handphone</th>
            <th>Pesan</th>

            <?php
            $a = 1;
            foreach ($saran as $s) {
            ?>

                <tr>
                    <td> <?= $a++; ?></td>
                    <td> <?= $s['nama']; ?></td>
                    <td> <?= $s['email_user']; ?></td>
                    <td> <?= $s['nohp']; ?></td>
                    <td> <?= $s['pesan']; ?></td>
                    <td onclick="javascript: return confirm('Apakah anda yakin data ini ingin di hapus ?')">
                        <?php echo anchor('Saran/hapus_saran/' . $s['id'], '<button class="btn btn-danger"><i class="fa fa-trash"></i></button>'); ?>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </section>

</div>
