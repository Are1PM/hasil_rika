<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Status Kelompok</h1>
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
                                <th>Status Kelompok</th>
                                <th width="13%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach ($data_StatusKelompok as $data) { ?>
                               
                            <tr class="even gradeC">
                                <td><?= $i++; ?>.</td>
                                <td><?= $data->status_kelompok; ?></td>
                               
                        

                                <td class="center">
                                    <a href="?rik=detail-StatusKelompok&id_status_kelompok=<?= $data->id_status_kelompok; ?>&parameter=1"><i class="fa fa-eye"></i></a> |
                                    <a href="?rik=ubah-StatusKelompok&id_status_kelompok=<?= $data->id_status_kelompok; ?>&parameter=1"><i class="fa fa-pencil"></i></a> |
                                    <a href="?rik=hapus-StatusKelompok&id_status_kelompok=<?= $data->id_status_kelompok; ?>" ><i class="fa fa-trash-o"></i></a>
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

