<style type="text/css">
    td{
        width :100px;
    }
</style>
<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Instansi</h1>
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
                                <td>Nama Instansi</td>
                                <td><?= $data->nama_instansi; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?= $data->alamat; ?></td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td><?= $data->kontak; ?></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

