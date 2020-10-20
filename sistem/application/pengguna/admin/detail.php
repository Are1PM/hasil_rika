<style type="text/css">
    td {
        width: 100px;
    }
</style>
<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Admin</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Detai Admin
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><b>Admin</b></td>
                                <td><?= $data_Admin->nama; ?></td>
                            </tr>
                            <tr>
                                <td><b>No. HP</b></td>
                                <td><?= $data_Admin->number_handphone; ?></td>
                            </tr>
                            <tr>
                                <td><b>E-mail</b></td>
                                <td><?= $data_Admin->email; ?></td>
                            </tr>
                            <tr>
                                <td><b>Username</b></td>
                                <td><?= $data_Admin->username; ?></td>
                            </tr>
                            <tr>
                                <td><b>Password</b></td>
                                <td><?= $data_Admin->password; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>