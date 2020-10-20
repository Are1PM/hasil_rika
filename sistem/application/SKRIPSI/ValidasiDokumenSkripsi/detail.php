<style type="text/css">
    td{
        width :100px;
    }
</style>
<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Validasi Dokumen Skripsi</h1>
    </div>
     <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td>Id Dokumen Skripsi</td>
                                <td><?= $data_ValidasiDokumenSkripsi->id_dokumen_skripsi; ?></td>
                            </tr>
                            <tr>
                                <td>Id Admin</td>
                                <td><?= $data_ValidasiDokumenSkripsi->id_admin; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Validasi</td>
                                <td><?= $data_ValidasiDokumenSkripsi->tanggal_validasi; ?></td>
                            </tr>
                            <tr>
                                <td>Id Status Validasi</td>
                                <td><?= $data_ValidasiDokumenSkripsi->id_status_validasi; ?></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><?= $data_ValidasiDokumenSkripsi->keterangan; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

