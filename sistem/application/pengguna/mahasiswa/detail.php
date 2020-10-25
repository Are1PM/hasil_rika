<style type="text/css">
    td {
        width: 100px;
    }
</style>
<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail mahasiswa</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data lengkap Stambuk <b><?= $data_mahasiswa->id_mahasiswa; ?></b>
            </div>
            <div class="panel-body">
                <div class="table-responsive">

                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><b>Stambuk</b></td>
                                <td><?= $data_mahasiswa->id_mahasiswa; ?></td>
                            </tr>
                            <tr>
                                <td><b>Kelompok</b></td>
                                <td><?= $data_mahasiswa->nama_kelompok; ?></td>
                            </tr>
                            <tr>
                                <td><b>Status Kelompok</b></td>
                                <td><?= $data_mahasiswa->status_kelompok; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama mahasiswa</b></td>
                                <td><?= $data_mahasiswa->nama_mahasiswa; ?></td>
                            </tr>
                            <tr>
                                <td><b>Angkatan</b></td>
                                <td><?= $data_mahasiswa->angkatan; ?></td>
                            </tr>
                            <tr>
                                <td><b>E-mail</b></td>
                                <td><?= $data_mahasiswa->email; ?></td>
                            </tr>
                            <tr>
                                <td><b>Number Handphone</b></td>
                                <td><?= $data_mahasiswa->number_handphone; ?></td>
                            </tr>
                            <tr>
                                <td><b>Username</b></td>
                                <td><?= $data_mahasiswa->username; ?></td>
                            </tr>
                            <tr>
                                <td><b>Password</b></td>
                                <td><?= $data_mahasiswa->password; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>