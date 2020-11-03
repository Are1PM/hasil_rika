<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dosen Pembimbing</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <a href="?rik=tambah-dosen-pembimbing" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Tambah Dosen Pembimbing
                </a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="35px">No.</th>
                                <th>Dosen Pembimbing</th>
                                <th>Judul Skripsi</th>
                                <th>Status Dosen Pembimbing</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            // print_r($DosenPembimbing);
                            // die;
                            foreach ($DosenPembimbing as $data) { ?>
                                <tr class="even gradeC">
                                    <td><?= $i++; ?>.</td>
                                    <td><?= $data->nama; ?></td>
                                    <td><?= $data->judul; ?></td>
                                    <td><?= $data->status_dosen_pembimbing; ?></td>
                                    <td class="center">
                                        <a href="?rik=detail-dosen-pembimbing&id_dosen_pembimbing=<?= $data->Id_dosen_pembimbing; ?>&parameter=1"><i class="fa fa-eye"></i></a> |
                                        <a href="?rik=ubah-dosen-pembimbing&id_dosen_pembimbing=<?= $data->Id_dosen_pembimbing; ?>&parameter=1"><i class="fa fa-pencil"></i></a> |
                                        <a href="?rik=hapus-dosen-pembimbing&id_dosen_pembimbing=<?= $data->Id_dosen_pembimbing; ?>" onclick="javascript: return confirm('Anda yakin ingin menghapus ?')"><i class="fa fa-trash-o"></i></a>
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