<style type="text/css">
    td {
        width: 100px;
    }
</style>
<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Pembimbing Lapangan</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Pembimbing Lapangan
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><b>Instansi</b></td>
                                <td><?= $data->nama_instansi; ?></td>
                            </tr>
                             <tr>
                                <td><b>Kelompok</b></td>
                                <td><?= $data->nama_kelompok; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Dosen Pembimbing</b></td>
                                <td><?= $data->nama_pembimbing_lapangan; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td><?= $data->alamat; ?></td>
                            </tr>
                            <tr>
                                <td><b>Number Handphone</b></td>
                                <td><?= $data->number_handphone; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>