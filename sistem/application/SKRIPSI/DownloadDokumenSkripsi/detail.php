<style type="text/css">
    td{
        width :100px;
    }
</style>
<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Upload Skripsi</h1>
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
                                <td>Id mahasiswa</td>
                                <td><?= $data->id_mahasiswa; ?></td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td><?= $data->judul; ?></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><?= $data->tahun; ?></td>
                            </tr>
                            <tr>
                                <td>Abstrak Inggris</td>
                                <td><?= $data->abstrak_inggris; ?></td>
                            </tr>
                            <tr>
                                <td>Abstrak Indonesia</td>
                                <td><?= $data->abstrak_indonesia; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Upload</td>
                                <td><?= $data->tanggal_upload; ?></td>
                            </tr>
                            <tr>
                                <td>Pembimbing I</td>
                                <td><?= $data->pembimbing_I; ?></td>
                            </tr>
                            <tr>
                                <td>Pembimbing II</td>
                                <td><?= $data->Pembimbing_II; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

