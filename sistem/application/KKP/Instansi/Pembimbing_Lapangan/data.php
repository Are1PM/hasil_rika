
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Pembimbing Lapangan</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <a href="?rik=tambah-pembimbing-lapangan" class="btn btn-primary">
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
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Kelompok</th>
                                <th>Alamat</th>
                                <th>Number Handphone</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($PembimbingLapangan as $data) { ?>
                            <tr class="even gradeC">
                                <td><?= $i++; ?>.</td>
                                <td><?= $data->nama_pembimbing_lapangan; ?></td>
                                <td><?= $data->nama_instansi; ?></td>
                                <td><?= $data->nama_kelompok; ?></td>
                                <td><?= $data->alamat; ?></td>
                                <td><?= $data->number_handphone; ?></td>
                                <td class="center">
                                    <a href="?rik=detail-pembimbing-lapangan&id_pembimbing_lapangan=<?= $data->id_pembimbing_lapangan; ?>&parameter=1"><i class="fa fa-eye"></i></a> |
                                    <a href="?rik=ubah-pembimbing-lapangan&id_pembimbing_lapangan=<?= $data->id_pembimbing_lapangan; ?>&parameter=1"><i class="fa fa-pencil"></i></a> |
                                    <a href="?rik=hapus-pembimbing-lapangan&id_pembimbing_lapangan=<?= $data->id_pembimbing_lapangan; ?>" onclick="javascript: return confirm('Anda yakin ingin menghapus ?')"><i class="fa fa-trash-o"></i></a> 
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
