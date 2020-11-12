<p align="justify" style="position: fixed; width: 560px; height: 200px; left: 2cm; top: 5cm;" class="alert alert-info">
    <i style="font-size: 16pt; font-weight: bold;">Informasi.....!!!</i><br>
    Sistem informasi pengarsipan dokumen ini diperuntukan bagi mahasiswa Ilmu Komputer untuk menarsipkan dokumen laporan kuliah kerja rofesi (KKP) dan dokumen skripsi.
    Anda dapat melakukan registrasi dengan meninputkan data diri dengan falid. Tujuan dari registrasi ini adalah agar mahasiswa memperoleh status dan hak untuk mengikuti prosedur akademik.
</p>
<div class="tm-container-outer tm-position-relative" id="tm-section-4" style="position: relative; top: -2.5cm;">
    <div id="google-map">
    </div>
    <form method="post" class="tm-contact-form">
        <h4>Registrasi Mahasiswa</h4>
        <div class="form-group">
            <input type="text" name="id_mahasiswa" class="form-control" placeholder="Nim" required />
        </div>
        <div class="form-group">
            <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa" required />
        </div>
        <div class="form-group tm-name-container">
            <input type="text" name="angkatan" class="form-control" placeholder="Angkatan" required />
        </div>
        <div class="form-group tm-email-container">
            <input type="email" name="email" class="form-control" placeholder="Email" required />
        </div>
        <div class="form-group">
            <input type="text" name="number_handphone" class="form-control" placeholder="Number Handphone" required />
        </div>
        <div class="form-group tm-name-container">
            <input type="text" name="username" class="form-control" placeholder="Username" required />
        </div>
        <div class="form-group tm-email-container">
            <input type="password" name="password" class="form-control" placeholder="Password" required />
        </div>
        <button type="submit" class="btn btn-primary tm-btn-primary tm-btn-send text-uppercase" name="simpan">Daftar</button>

    </form>
    <?php
    // print_r($_POST);
    // die;
    if (isset($_POST['simpan'])) {

        $id_mahasiswa = $_POST['id_mahasiswa'];
        $id_kelompok = 0;
        $id_status_kelompok = 0;
        $nama = $_POST['nama_mahasiswa'];
        $angkatan = $_POST['angkatan'];
        $email = $_POST['email'];
        $number_handphone = $_POST['number_handphone'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $tambah = new MengelolaMahasiswa($id_mahasiswa, $id_kelompok, $id_status_kelompok, $nama, $angkatan, $email, $number_handphone, $username, $password);
        $tambah->MemasukkanMahasiswa();
    }
    ?>
</div> <!-- .tm-container-outer -->