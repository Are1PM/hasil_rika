<?php
require "Instansi.php";

class MengelolaInstansi extends Instansi
{
	public function __construct($id_instansi ='',$nama_instansi ='',$alamat ='',$kontak='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_instansi  = $id_instansi;
            $this->nama_instansi= $nama_instansi;
            $this->alamat      	= $alamat;
            $this->kontak       = $kontak;
            
    }

	function MelihatInstansi()
	{
		return $this->queryMelihatInstansi();
	}

	function MencariInstansi()
	{
		return $this->queryMencariInstansi();
	}

	function MemasukkanInstansi()
	{
		return $this->queryMemasukkanInstansi();
	}

	function MengubahInstansi()
	{
		return $this->queryMengubahInstansi();
	}

	function MenghapusInstansi()
	{
		return $this->queryMenghapusInstansi();
	}

}


?>
