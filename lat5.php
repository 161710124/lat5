<?php

class buku
{
	public $merk,$tebal,$warna;

	public function __construct($merk,$tebal,$warna)
	{
		$this->merk=$merk;
		$this->tebal=$tebal;
		$this->warna=$warna;

	}
	public function get_merk(){
		return $this->merk;
	}
		public function get_tebal(){
		return $this->tebal;
	}
	public function get_warna(){
		return $this->warna;
	}

}
?>