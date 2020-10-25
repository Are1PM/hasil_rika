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
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="35px">No.</th>
                                <th>NIM</th>
                                <th>Mahasiswa</th>
                                <th>Tanggal Upload</th>
                                <th>Tahun</th>
                                <th>Dokumen</th>
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
                                    <td><?= $data->id_mahasiswa; ?></td>
                                    <td><?= $data->nama_mahasiswa; ?></td>
                                    <td><?= $data->tanggal_upload; ?></td>
                                    <td><?= $data->tahun; ?></td>
                                    <td>
                                        <a href="?rik=detail-DokumenKkp&id_dokumen_kkp=<?= $data->id_dokumen_kkp; ?>">Kelengkapan dokumen</a>
                                    </td>
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
                                            echo '<i class="label label-warning">Tidak Valid</i>';
                                        } else {
                                            echo '<i class="label label-danger">Belum di Validasi</i>';
                                        }
                                        ?>
                                    </td>
                                    <td class="center">

                                        <a href="?rik=hapus-DokumenKkp&id_dokumen_kkp=<?= $data->id_dokumen_kkp; ?>" onclick="javascript: return confirm('Anda yakin ingin menghapus ?')">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
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