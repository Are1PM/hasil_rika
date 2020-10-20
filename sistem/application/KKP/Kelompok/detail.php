<style type="text/css">
    td {
        width: 100px;
    }
</style>
<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Kelompok</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data lengkap
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
    
                            <tr>
                                <td><b>Nama Kelompok</b></td>
                                <td><?= $data->nama_kelompok; ?></td>
                            </tr>
                            <tr>
                                <td><b>Status Kelompok</b></td>
                                <td><?= $data->id_status_kelompok; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Masuk</b></td>
                                <td><?= $data->tanggal_masuk; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Keluar</b></td>
                                <td><?= $data->tanggal_keluar; ?></td>
                            </tr>
                            <tr>
                                <td><b>Dosen Pembimbing</b></td>
                                <td><?= $data->id_dosen; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tahun Akademik</b></td>
                                <td><?= $data->tahun_akademik; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>