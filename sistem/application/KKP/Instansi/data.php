<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Instansi</h1>
    </div>
     <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="?rik=tambah-Instansi" class="btn btn-primary">
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
                                <th>Nama Instansi</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                                <th width="13%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach ($data_Instansi as $data) { ?>
                               
                            <tr class="even gradeC">
                                <td><?= $i++; ?>.</td>
                                <td><?= $data->nama_instansi; ?></td>
                                <td><?= $data->alamat; ?></td>
                                <td><?= $data->kontak; ?></td>
                        

                                <td class="center">
                                    <a href="?rik=detail-Instansi&id_instansi=<?= $data->id_instansi; ?>&parameter=1"><i class="fa fa-eye"></i></a> |
                                    <a href="?rik=ubah-Instansi&id_instansi=<?= $data->id_instansi; ?>&parameter=1"><i class="fa fa-pencil"></i></a> |
                                    <a href="?rik=hapus-Instansi&id_instansi=<?= $data->id_instansi; ?>" ><i class="fa fa-trash-o"></i></a>
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

