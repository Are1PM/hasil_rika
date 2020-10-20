<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Download Dokumen Skripsi</h1>
    </div>
     <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="35px">No.</th>
                                <th>Judul Skripsi</th>
                                <th>Dosen</th>
                                <th>Tanggal Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach ($data_DownloadDokumenSkripsi as $data) { ?>
                               
                            <tr class="even gradeC">
                                <td><?= $i++; ?>.</td>
                                <td>
                                    <a href="?rik=detail-DownloadDokumenSkripsi&id_dokumen_skripsi=<?= $data->id_dokumen_skripsi; ?>"><?= $data->judul; ?></a>
                                    </td>
                                <td>
                                    <a href="?rik=detail-dosen&id_dosen=<?= $data->id_dosen; ?>&parameter=1"><?= $data->nama; ?></a>
                                </td>
                                <td><?= $data->tanggal_download; ?></td>
                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

