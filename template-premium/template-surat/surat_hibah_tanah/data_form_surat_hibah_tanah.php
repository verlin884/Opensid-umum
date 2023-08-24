<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
	$data['warganegara'] = $this->penduduk_model->list_warganegara();
	$data['agama'] = $this->referensi_model->list_data('tweb_penduduk_agama');
	$data['pekerjaan'] = $this->penduduk_model->list_pekerjaan('ucwords');
	$data['sex'] = $this->penduduk_model->list_sex();
		$data['Dusun'] = array(
		"I"   => "I",
		"II"  => "II",
		"III" => "III",
		"IV"  => "IV"
	);	
		$data['RT'] = array(
		"001" => "001",
		"002" => "002",
		"003" => "003",
		"004" => "004",
		"005" => "005",
		"006" => "006",
		"007" => "007",
		"008" => "008",		
		"009" => "009",
		"010" => "010",
		"011" => "011",
		"012" => "012"
	);
		$data['RW'] = array(
		"001" => "001",
		"002" => "002",
		"003" => "003",
		"004" => "004"
	);
		$data['jenis_tanah'] = array(
		"Tanah Pekarangan" => "Tanah Pekarangan",
		"Tanah Sawah"      => "Tanah Sawahan",
		"Tanah Kebun"      => "Tanah Kebun",
		);
    $_SESSION['post'] = $_POST;
	$_SESSION['post']['nomor'] = $data['surat_terakhir']['no_surat_berikutnya'];
		if ($this->input->post('id_pemohon') == '*')
		{
			// Hapus $individu sebagai pemohon karena bukan warga desa
			unset($data['nik']);
			unset($_SESSION['post']['nik']);
			unset($data['individu']);
		}
		if ($this->input->post('saksi1')==2) unset($_SESSION['id_saksi1']);
		if ($_POST['id_saksi1'] != '' AND $_POST['id_saksi1'] !='*')
		{
			$data['saksi1']=$this->surat_model->get_penduduk($_POST['id_saksi1']);
			$_SESSION['id_saksi1'] = $_POST['id_saksi1'];
		}
		elseif ($_POST['id_saksi1'] !='*' AND isset($_SESSION['id_saksi1']))
		{
			$data['saksi1']=$this->surat_model->get_penduduk($_SESSION['id_saksi1']);
		}
		else
		{
			unset($data['saksi1']);
			unset($_SESSION['id_saksi1']);
		}

		if ($this->input->post('saksi2')==2) unset($_SESSION['id_saksi2']);
		if ($_POST['id_saksi2'] != '' AND $_POST['id_saksi2'] !='*')
		{
			$data['saksi2']=$this->surat_model->get_penduduk($_POST['id_saksi2']);
			$_SESSION['id_saksi2'] = $_POST['id_saksi2'];
		}
		elseif ($_POST['id_saksi2'] !='*' AND isset($_SESSION['id_saksi2']))
		{
			$data['saksi2']=$this->surat_model->get_penduduk($_SESSION['id_saksi2']);
		}
		else
		{
			unset($data['saksi2']);
			unset($_SESSION['id_saksi2']);
		}
		
	// -- Penerimahibahii
	if ($this->input->post('penerimahibahii') == 2) unset($_SESSION['id_penerimahibahii']);
	if ($_POST['id_penerimahibahii'] != '' AND $_POST['id_penerimahibahii'] !='*')
	{
		$data['penerimahibahii'] = $this->surat_model->get_penduduk($_POST['id_penerimahibahii']);
		$_SESSION['id_penerimahibahii'] = $_POST['id_penerimahibahii'];
	}
	elseif ($_POST['id_penerimahibahii'] !='*' AND isset($_SESSION['id_penerimahibahii']))
	{
		$data['penerimahibahii'] = $this->surat_model->get_penduduk($_SESSION['id_penerimahibahii']);
	}
	else
	{
		unset($data['penerimahibahii']);
		unset($_SESSION['id_penerimahibahii']);
	}
	// -- Akhir Penerimahibahii

?>