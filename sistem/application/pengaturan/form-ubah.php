<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Pengaturan</h1>
    </div>
    <!--end page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="Title" value="<?= $data->title ?>" class="form-control" placeholder="Title" required>
                            </div>
                            <div class="form-group">
                                <label>Judul Top Bar</label>
                                <input type="text" name="Judul_Top_Bar" value="<?= $data->judul_top_bar ?>" class="form-control" placeholder="Judul Top Bar" />
                            </div>
                            <div class="form-group">
                                <label>Singkatan Aplikasi</label>
                                <input type="text" name="singkatan_apps" value="<?= $data->singkatan_apps ?>" class="form-control" placeholder="Singkatan Aplikasi" required>
                            </div>
                            <div class="form-group">
                                <label>Catatan Kaki</label>
                                <input type="text" name="catatan_kaki" value="<?= $data->catatan_kaki ?>" class="form-control" placeholder="Catatan Kaki" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {

                            $Title = $_POST['Title'];
                            $Judul_Top_Bar = $_POST['Judul_Top_Bar'];
                            $singkatan_apps = $_POST['singkatan_apps'];
                            $catatan_kaki = $_POST['catatan_kaki'];


                            $ubah = new Pengaturan();
                            $ubah->MengubahPengaturan($Title,$Judul_Top_Bar,$singkatan_apps,$catatan_kaki);
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>