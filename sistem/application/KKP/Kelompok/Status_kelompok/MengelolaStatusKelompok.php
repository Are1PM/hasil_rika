<?php
require "StatusKelompok.php";

class MengelolaStatusKelompok extends StatusKelompok
{
	public function __construct($id_status_kelompok ='',$status_kelompok ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_status_kelompok  = $id_status_kelompok;
            $this->status_kelompok= $status_kelompok;
          
            
    }

	function MelihatStatusKelompok()
	{
		return $this->queryMelihatStatusKelompok();
	}

	function MencariStatusKelompok()
	{
		return $this->queryMencariStatusKelompok();
	}

	function MemasukkanStatusKelompok()
	{
		return $this->queryMemasukkanStatusKelompok();
	}

	function MengubahStatusKelompok()
	{
		return $this->queryMengubahStatusKelompok();
	}

	function MenghapusStatusKelompok()
	{
		return $this->queryMenghapusStatusKelompok();
	}

}


?>
