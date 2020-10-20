<style type="text/css">
    td {
        width: 100px;
    }
</style>
<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail dosen</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data lengkap dosen <b><?= $data_dosen->id_dosen ?></b>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><b>Id Dosen</b></td>
                                <td><?= $data_dosen->id_dosen ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama</b></td>
                                <td><?= $data_dosen->nama ?></td>
                            </tr>
                            <tr>
                                <td><b>No. HP</b></td>
                                <td><?= $data_dosen->number_handphone ?></td>
                            </tr>
                            <tr>
                                <td><b>E-mail</b></td>
                                <td><?= $data_dosen->email ?></td>
                            </tr>
                            <tr>
                                <td><b>Username</b></td>
                                <td><?= $data_dosen->username ?></td>
                            </tr>
                            <tr>
                                <td><b>Password</b></td>
                                <td><?= $data_dosen->password ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>