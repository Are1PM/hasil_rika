<section class="tm-banner">
    <div class="tm-container-outer tm-banner-bg">
        <div class="container">
            <div class="row tm-banner-row" id="tm-section-search">
                <form action="" method="post" class="tm-search-form tm-section-pad-2">
                    <div class="form-row tm-search-form-row">                                
                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                            <label>Tahun</label>
                            <input name="tahun" type="number" value="<?= $_POST['tahun'] ?>" class="form-control" placeholder="Masukkan Tahun" required="">
                        </div>
                    </div> <!-- form-row -->
                    <div class="form-row tm-search-form-row">
                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                            <label for="btnSubmit">&nbsp;</label>
                            <button type="submit" class="btn btn-primary tm-btn tm-btn-search" name="cari"><i class="fa fa-search"></i> Cari Dokumen</button>
                        </div>
                    </div>                              
                </form> 
                                          
            </div> <!-- row -->
            <div class="tm-banner-overlay"></div>
        </div>  <!-- .container -->                   
    </div>     <!-- .tm-container-outer -->                 
</section>
<?php 

if (isset($_POST['cari'])) { ?>
    
<section class="p-5 tm-container-outer tm-bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                <h2 class="text-uppercase mb-4">Hasil Pencarian</h2>
            </div>
        </div>
    </div>            
</section>   
<div class="tm-container-outer" id="tm-section-3">
    <div class="tab-content clearfix">
        <!-- Tab 4 -->
        <div class="tab-pane fade show active" id="4a">
        <!-- Current Active Tab WITH "show active" classes in DIV tag -->
            <div class="tm-recommended-place-wrap">
                <table id="" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tahun Akademik</th>
                            <th>Instansi</th>
                            <th>E-MAIL</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data_kkp as $data) { ?>
                       
                        <tr>
                            <td><?= $data->id_mahasiswa ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->tahun_akademik ?></td>
                            <td><?= $data->nama_instansi ?></td>
                            <td><?= $data->email ?></td>
                            <td>
                                <a href="app/kkp/download-kkp.php?filename=<?= $data->file_bab_1 ?>&id=<?= $data->id_dokumen_kkp ?>" target="_blank">BAB 1</a> 
                                <?php
                                if ($_SESSION['hak_akses']=="dosen") { ?>
                                |
                                <a href="app/kkp/download-kkp.php?filename=<?= $data->file_bab_1 ?>&id=<?= $data->id_dokumen_kkp ?>" target="_blank">FULL</a>
                                <?php } ?>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>                        
        </div> <!-- tab-pane -->
    </div>
</div>
<?php } ?>