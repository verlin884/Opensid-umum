<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	$str_desa = ucwords($this->setting->sebutan_desa.' '.$data['lokasi']['nama_desa']);
	$data['nomor'] = $this->input->post('nomor_main');
	$_SESSION['post'] = $_POST;
	$_SESSION['post']['nomor'] = $data['surat_terakhir']['no_surat_berikutnya'];
	$data['pekerjaan'] = $this->penduduk_model->list_pekerjaan('ucwords');
	//$data['agama'] = $this->penduduk_model->list_agama();
	$data['warganegara'] = $this->penduduk_model->list_warganegara();
	

	if ($data['individu'])
	{
		

		$data['ibu'] = $this->surat_model->get_data_ibu($_POST['nik']);
		$data['ayah'] = $this->surat_model->get_data_ayah($_POST['nik']);
	}
	

	if ($this->input->post('pasangan')==2) unset($_SESSION['id_pasangan']);

	if ($_POST['id_pasangan'] != '' AND $_POST['id_pasangan'] !='*')
	{
		$data['pasangan']=$this->surat_model->get_penduduk($_POST['id_pasangan']);
		$_SESSION['id_pasangan'] = $_POST['id_pasangan'];
	}
	elseif ($_POST['id_pasangan'] !='*' AND isset($_SESSION['id_pasangan']))
	{
		$data['pasangan']=$this->surat_model->get_penduduk($_POST['id_pasangan']);
		
	}
	else
	{
		unset($data['pasangan']);
		unset($_SESSION['id_pasangan']);
	}
?>