<style type="text/css">
    td{
        width :100px;
    }
</style>
<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Validasi Dokumen KKP</h1>
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
                                <td>Id Admin</td>
                                <td><?= $data_ValidasiDokumenKKP->id_admin; ?></td>
                            </tr>
                            <tr>
                                <td>Id Dokumen</td>
                                <td><?= $data_ValidasiDokumenKKP->id_dokumen; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Validasi</td>
                                <td><?= $data_ValidasiDokumenKKP->tanggl_validasi; ?></td>
                            </tr>
                            <tr>
                                <td>Status Validasi</td>
                                <td><?= $data_ValidasiDokumenKKP->status_validasi; ?></td>
                            </tr>
                            <tr>
                                <td>keterangan</td>
                                <td><?= $data_ValidasiDokumenKKP->keterangan; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

