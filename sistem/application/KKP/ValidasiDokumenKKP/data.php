<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Validasi Dokumen KKP</h1>
    </div>
     <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="?rik=tambah-mahasiswa" class="btn btn-primary">
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
                                <th>Id Admin</th>
                                <th>Id Dokumen</th>
                                <th>Tanggal Validasi</th>
                                <th>Id Status Validasi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach ($data_ValidasiDokumenKKP as $data) { ?>
                               
                            <tr class="even gradeC">
                                <td><?= $i++; ?>.</td>
                                <td><?= $data->id_admin; ?></td>
                                <td><?= $data->id_dokumen_kkp; ?></td>
                                <td><?= $data->tanggal_validasi; ?></td>
                                <td><?= $data->id_status_validasi; ?></td>
                                <td><?= $data->keterangan; ?></td>

                                <td class="center">
                                    <a href="?rik=detail-ValidasiDokumenKKP&id_val_kkp=<?= $data->id_val_kkp; ?>&parameter=1"><i class="fa fa-eye"></i></a> |
                                    <a href="?rik=ubah-ValidasiDokumenKKP&id_val_kkp=<?= $data->id_val_kkp; ?>&parameter=1"><i class="fa fa-pencil"></i></a> |
                                    <a href="?rik=hapus-ValidasiDokumenKKP&id_val_kkp=<?= $data->id_val_kkp; ?>" ><i class="fa fa-trash-o"></i></a>
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

