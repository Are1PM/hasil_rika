<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Dokumen KKP</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php
                // print_r($data_DokumenKkp);
                if ($data_DokumenKkp[0]->id_kelompok == 0) :
                    $data_DokumenKkp = [];
                ?>

                    <div class="alert alert-info text-center">
                        Penginputkan file arsip dapat dilakuakn setelah data kelompok di inputkan oleh admin
                    </div>
                    <!-- <a href="?rik=detail-DokumenKkp&id_dokumen_kkp" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> -->
                <?php endif; ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="35px">No.</th>
                                <th>NIM</th>
                                <th>Nama Kelompok</th>
                                <th>Instansi</th>
                                <th>Pembimbing Lapangan</th>
                                <th>Tanggal Upload</th>
                                <th>Tahun</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data_DokumenKkp as $data) { ?>

                                <tr class="even gradeC">
                                    <td><?= $i++; ?>.</td>
                                    <td><?= $_SESSION['id_mahasiswa']; ?></td>
                                    <td><?= $data->nama_instansi; ?></td>
                                    <td><?= $data->nama_kelompok; ?></td>
                                    <td><?= $data->nama_pembimbing_lapangan; ?></td>
                                    <td><?= $data->tanggal_upload; ?></td>
                                    <td><?= $data->tahun; ?></td>

                                    <?php
                                    $id_dokumen_kkp = $data->id_dokumen_kkp;
                                    $validasi = new MengelolaValidasiDokumenKkp('', '', $id_dokumen_kkp, '', '', '');
                                    $val      = $validasi->MencariDokumenKkp();
                                    ?>
                                    <td>
                                        <?php
                                        if ($val->Id_status_validasi == 1) {
                                            echo '<i class="label label-success">Telah di Validasi</i>';
                                        } elseif ($val->Id_status_validasi == 2) {
                                            echo '<i class="label label-danger">Tidak Valid</i>';
                                        } else {
                                            echo '<i class="label label-warning">Belum di Validasi</i>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="?rik=detail-DokumenKkp&id_dokumen_kkp=<?= $data->id_dokumen_kkp; ?>"><i class="fa fa-upload"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>