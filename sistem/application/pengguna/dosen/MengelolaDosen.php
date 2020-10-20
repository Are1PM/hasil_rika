<?php
require "Dosen.php";

class MengelolaDosen extends Dosen
{
	public function __construct($id_dosen ='',$nama ='',$number_handphone ='',$email='',$username ='',$password='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_dosen  	 	 = $id_dosen;
            $this->nama        	 	 = $nama;
            $this->number_handphone  = $number_handphone;
            $this->email 	 	 	 = $email;
            $this->username    	 	 = $username;
            $this->password    	 	 = $password;
    }

	function MelihatDosen()
	{
		return $this->queryMelihatDosen();
	}

	function MencariDosen()
	{
		return $this->queryMencariDosen();
	}

	function MemasukkanDosen()
	{
		return $this->queryMemasukkanDosen();
	}

	function MengubahDosen()
	{
		return $this->queryMengubahDosen();
	}

	function MenghapusDosen()
	{
		return $this->queryMenghapusDosen();
	}

}


?>
