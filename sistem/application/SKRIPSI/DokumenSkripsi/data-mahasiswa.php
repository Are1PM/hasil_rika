<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Dokumen Skripsi</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="?rik=tambah-DokumenSkripsi" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Tambah
                </a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="35px">No.</th>
                                <th>NIM</th>
                                <th>Judul Skripsi</th>
                                <th>Tahun</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data_Dokumenskripsi as $data) { ?>

                                <tr class="even gradeC">
                                    <td><?= $i++; ?>.</td>
                                    <td><?= $data->id_mahasiswa; ?></td>
                                    <td><?= $data->judul; ?></td>
                                    <td>
                                        <a href="?rik=detail-DokumenSkripsi&id_bimbingan=<?= $data->id_bimbingan; ?>">Kelengkapan dokumen</a>
                                    </td>
                                    <td>
                                        <?php
                                        $id_dokumen_skripsi = $data->id_dokumen_skripsi;
                                        $val = new MengelolaValidasiDokumenSkripsi('', '', $id_dokumen_skripsi, '', '', '');
                                        $cek_val = $val->MencariDokumen();
                                        if ($cek_val->status_validasi == "") { ?>
                                            <i class="label label-danger">Not Validation</i>
                                        <?php } else { ?>
                                            <i class="label label-success">Valid</i>
                                        <?php } ?>
                                    </td>
                                    <td class="center">
                                        <a href="?rik=hapus-DokumenSkripsi&id_dokumen_skripsi=<?= $data->id_dokumen_skripsi; ?>" onclick="javascript: return confirm('Anda yakin ingin menghapus ?')"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>