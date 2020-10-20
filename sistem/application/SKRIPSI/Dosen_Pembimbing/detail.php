<style type="text/css">
    td {
        width: 100px;
    }
</style>
<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Dosen Pembimbing</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Dosen Pembimbing
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><b>Nama Dosen Pembimbing</b></td>
                                <td><?= $data->nama; ?></td>
                            </tr>
                            <tr>
                                <td><b>Judul Skripsi</b></td>
                                <td><?= $data->judul; ?></td>
                            </tr>
                            <tr>
                                <td><b>Status Pembimbing</b></td>
                                <td><?= $data->id_status_dosen_pembimbing; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>