<?php
require "StatusValidasi.php";

class MengelolaStatusValidasi extends StatusValidasi
{
	public function __construct($id_status_validasi ='',$status_validasi ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_status_validasi  = $id_status_validasi;
            $this->status_validasi= $status_validasi;
          
            
    }

	function MelihatStatusValidasi()
	{
		return $this->queryMelihatStatusValidasi();
	}

	function MencariStatusValidasi()
	{
		return $this->queryMencariStatusValidasi();
	}

	function MemasukkanStatusValidasi()
	{
		return $this->queryMemasukkanStatusValidasi();
	}

	function MengubahStatusValidasi()
	{
		return $this->queryMengubahStatusValidasi();
	}

	function MenghapusStatusValidasi()
	{
		return $this->queryMenghapusStatusValidasi();
	}

}


?>
