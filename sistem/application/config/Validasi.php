<?php
require "KoneksiBasisData.php";
/**
 * 
 */
class Validasi 
{ 
	protected $konek;

	public function __construct()
	{
		$this->konek= new KoneksiBasisData();
	}
	/**
	 * login
	 */
	public function login($hak_akses='',$Username='',$Password='')
	{
		if ($hak_akses==1) {
		
			$sql="SELECT * FROM admin where username='$Username' AND password='$Password'";
        	$data = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

			if ($data) {
				session_start();
				$_SESSION['id_admin']=$data->id_admin;
				$_SESSION['user']=$data->nama;
				$_SESSION['hak_akses']="admin";
				header("location: ../sistem/index.php");
			}else{
				echo '<br><center><div class="alert alert-danger text-center" style="width:975px;">Username atau Password Salah...!!!</div></center>';
			}

		}elseif ($hak_akses==2) {

			$sql="SELECT * FROM dosen where username='$Username' AND password='$Password'";
        	$data = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

			if ($data) {
				session_start();
				$_SESSION['id_dosen']=$data->id_dosen;
				$_SESSION['user']=$data->nama;
				$_SESSION['hak_akses']="dosen";
				header("location: index.php");
			}else{
				echo '<br><center><div class="alert alert-danger text-center" style="width:975px;">Username atau Password Salah...!!!</div></center>';
			}

		}elseif ($hak_akses==3) {
			$sql="SELECT * FROM mahasiswa where username='$Username' AND password='$Password'";
        	$data = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

			if ($data) {
				session_start();
				$_SESSION['id_mahasiswa']=$data->id_mahasiswa;
				$_SESSION['user']=$data->nama_mahasiswa;
				$_SESSION['hak_akses']="mahasiswa";
				header("location: ../sistem/index.php");
			}else{
				echo '<br><center><div class="alert alert-danger text-center" style="width:975px;">Username atau Password Salah...!!!</div></center>';
			}
		}

	}
	/**
	 * logout
	 */
	public function logout()
	{
		unset($_SESSION['hak_akses']);
		unset($_SESSION['id_mahasiswa']);
		unset($_SESSION['id_dosen']);
		unset($_SESSION['id_admin']);
		unset($_SESSION['user']);

		if(session_destroy())
		{
		  header("location: ../pengunjung/index.php");
		}
	}
	/**
	 * CekStatusLogin
	 */
	public function CekStatusLogin()
	{
		if (isset($_SESSION['hak_akses'])) {
			header("location: index.php");
		}
	}

}









