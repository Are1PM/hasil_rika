<?php
require "Mahasiswa.php";

class MengelolaMahasiswa extends Mahasiswa
{
	public function __construct($id_mahasiswa ='',$id_kelompok ='',$id_status_kelompok='',$nama_mahasiswa ='',$angkatan ='',$email='',$number_handphone='',$username ='',$password='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_mahasiswa  = $id_mahasiswa;
            $this->id_kelompok  = $id_kelompok;
            $this->id_status_kelompok  = $id_status_kelompok;
            $this->nama_mahasiswa= $nama_mahasiswa;
            $this->angkatan      = $angkatan;
            $this->username    	 = $username;
            $this->password    	 = $password;
            $this->email 	 	 = $email;
            $this->number_handphone = $number_handphone;
    }

	function MelihatMahasiswa()
	{
		return $this->queryMelihatMahasiswa();
	}

	function semuaMahasiswa()
	{
		return $this->muchMahasiswa();
	}

	function AllMahasiswa()
	{
		return $this->queryJumlahMahasiswa();
	}

	function tambahAnggotaKelompok()
	{
		return $this->addAnggotaMahasiswa();
	}

	function MencariMahasiswa()
	{
		return $this->queryMencariMahasiswa();
	}

	function MemasukkanMahasiswa()
	{
		return $this->queryMemasukkanMahasiswa();
	}

	function MengubahMahasiswa()
	{
		return $this->queryMengubahMahasiswa();
	}

	function MenghapusMahasiswa()
	{
		return $this->queryMenghapusMahasiswa();
	}

}


?>
