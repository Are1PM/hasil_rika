<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Admin</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="?rik=tambah-Admin" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Tambah
                </a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="50px">No.</th>
                                <th>Nama</th>
                                <th>No.HP</th>
                                <th>E-Mail</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data_Admin as $data) { ?>
                                <tr class="even gradeC">
                                    <td><?= $i++; ?>.</td>
                                    <td><?= $data->nama ?></td>
                                    <td><?= $data->number_handphone ?></td>
                                    <td><?= $data->email ?></td>
                                    <td><?= $data->username ?></td>
                                    <td><?= $data->password ?></td>

                                    <td class="center">
                                        <a href="?rik=detail-Admin&id_admin=<?= $data->id_admin; ?>&parameter=1"><i class="fa fa-eye"></i></a> |
                                        <a href="?rik=ubah-Admin&id_admin=<?= $data->id_admin; ?>&parameter=1"><i class="fa fa-pencil"></i></a>|
                                        <a href="?rik=hapus-Admin&id_admin=<?= $data->id_admin; ?>&parameter=1" onclick="javacript: return confirm('Anda yakin ingin menghapus ?')"><i class="fa fa-trash-o"></i></a> |

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