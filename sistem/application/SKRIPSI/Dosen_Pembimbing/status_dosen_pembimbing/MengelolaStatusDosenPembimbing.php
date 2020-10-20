<?php
require "StatusDosenPembimbing.php";

class MengelolaStatusDosenPembimbing extends StatusDosenPembimbing
{
	public function __construct($id_status_dosen_pembimbing ='',$status_dosen_pembimbing ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_status_dosen_pembimbing  = $id_status_dosen_pembimbing;
            $this->status_dosen_pembimbing= $status_dosen_pembimbing;
          
            
    }

	function MelihatStatusDosenPembimbing()
	{
		return $this->queryMelihatStatusDosenPembimbing();
	}

	function MencariStatusDosenPembinbng()
	{
		return $this->queryMencariStatusDosenPembimbing();
	}

	function MemasukkanStatusDosenPembimbing()
	{
		return $this->queryMemasukkanStatusDosenPembimbing();
	}

	function MengubahStatusDosenPembimbing()
	{
		return $this->queryMengubahStatusDosenPembimbing();
	}

	function MenghapusStatusDosenPembimbing()
	{
		return $this->queryMenghapusStatusDosenPembimbing();
	}

}


?>
