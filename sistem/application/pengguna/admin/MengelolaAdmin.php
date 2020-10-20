<?php
require "Admin.php";

class MengelolaAdmin extends Admin
{
	public function __construct($id_admin ='',$nama ='',$number_handphone ='',$email='',$username ='',$password='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_admin  	 	 = $id_admin;
            $this->nama        	 	 = $nama;
            $this->number_handphone  = $number_handphone;
            $this->email 	 	 	 = $email;
            $this->username    	 	 = $username;
            $this->password    	 	 = $password;
    }

	function MelihatAdmin()
	{
		return $this->queryMelihatAdmin();
	}

	function MencariAdmin()
	{
		return $this->queryMencariAdmin();
	}

	function MemasukkanAdmin()
	{
		return $this->queryMemasukkanAdmin();
	}

	function MengubahAdmin()
	{
		return $this->queryMengubahAdmin();
	}

	function MenghapusAdmin()
	{
		return $this->queryMenghapusAdmin();
	}

}


?>
