<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	ini_set('max_execution_time', 3600);
	// JIKA DATA SUAMI DARI DATABASE

	if ($_SESSION['id_pria'])
	{
		$pria 				= $this->get_data_surat($_SESSION['id_pria']);
		$ibu_pria 			= $this->get_data_ibu($_SESSION['id_pria']);
		$ayah_pria 			= $this->get_data_ayah($_SESSION['id_pria']);

		$data_surat_ayah	= $this->get_data_surat($ayah_pria['id']);
		$data_surat_ibu		= $this->get_data_surat($ibu_pria['id']);
		
		//DATA SUAMI
		$len_tempatlahir_pria 				= strlen($pria['tempatlahir']);
		$len_alamat_pria 					= strlen($pria['alamat']);

		$input['nik_pria'] 					= $pria['nik'];
		$input['kk_pria'] 					= $pria['no_kk'];
		$input['pasport_pria'] 				= $pria['dokumen_pasport'];
		$input['nama_pria'] 				= strtoupper($pria['nama']);
		
		$input['tempat_lahir_pria'] 		= strtoupper($pria['tempatlahir']);
		$input['strlen_tempat_lahir'] 		= $len_tempatlahir_pria;
		$input['sisa_kotak_tempat_lahir']	= 36 - $len_tempatlahir_pria - 11;

		//$input['tgllahir_pria']				= $pria['tanggallahir'];
		$input['tanggal_lahir_pria'] 		= substr($pria['tanggallahir'],8,2);
		$input['bulan_lahir_pria'] 			= substr($pria['tanggallahir'],5,2);
		$input['tahun_lahir_pria'] 			= substr($pria['tanggallahir'],0,4);
		
		$input['alamat_pria'] 				= strtoupper($pria['alamat']);
		$input['len_alamat_pria']			= $len_alamat_pria;
		$input['rt_pria']					= $pria['rt'];
		$input['rw_pria']					= $pria['rw'];
		$input['sisa_kotak_alamat_pria']	= 36 - $len_alamat_pria - 10;

		$input['kdpos_pria']				= $config['kode_pos'];
		$input['telpon_pria']				= $pria['telepon'];
		$input['desa_pria']       			= strtoupper($config['nama_desa']);
	    $input['kec_pria']       			= strtoupper($config['nama_kecamatan']);
	    $input['kab_pria']       			= strtoupper($config['nama_kabupaten']);
	    $input['prov_pria']   				= strtoupper($config['nama_propinsi']);
	    $input['pendidikan_pria']   		= strtoupper($pria['pendidikan']);
	    $input['agama_pria']   				= strtoupper($pria['agama']);
	    $input['pekerjaan_pria']   			= strtoupper($pria['pekerjaan']);
	    $input['anak_ke_pria']   			= ( isset($pria['kelahiran_anak_ke'])? strtoupper(trim(to_word($pria['kelahiran_anak_ke']))): "" );
	    $input['status_kawin_pria']   		= strtoupper($pria['status_kawin']);
	    $input['istri_ke']					= (isset($input['istri_ke'])? dua_digit($input['istri_ke']):"01");
	    $input['warganegara_pria']   		= strtoupper($pria['warganegara']);


	    //DATA AYAH PRIA
	    $len_tempatlahir_ayah_pria 				= strlen($ayah_pria['tempatlahir']);
		$len_alamat_ayah_pria 					= strlen($ayah_pria['alamat']);
		$input['strlen_tempat_lahir_ayah'] 		= $len_tempatlahir_ayah_pria;
		$input['sisa_kotak_tempat_lahir_ayah']	= 36 - $len_tempatlahir_ayah_pria - 11;
		$input['len_alamat_ayah_pria']			= $len_alamat_ayah_pria;
		$input['sisa_kotak_alamat_ayah_pria']	= 36 - $len_alamat_ayah_pria - 10;

	    $input['nik_ayah_pria'] 				= $ayah_pria['nik'];
		$input['nama_ayah_pria'] 				= strtoupper($ayah_pria['nama']);
		$input['agama_ayah_pria']   			= strtoupper($ayah_pria['agama']);
		$input['tempat_lahir_ayah_pria'] 		= strtoupper($ayah_pria['tempatlahir']);
		//$input['tgllahir_ayah_pria']			= $ayah_pria['tanggallahir'];
		$input['tanggal_lahir_ayah_pria'] 		= substr($ayah_pria['tanggallahir'],8,2);
		$input['bulan_lahir_ayah_pria'] 		= substr($ayah_pria['tanggallahir'],5,2);
		$input['tahun_lahir_ayah_pria'] 		= substr($ayah_pria['tanggallahir'],0,4);
		$input['alamat_ayah_pria'] 				= strtoupper($ayah_pria['alamat']);
		$input['rt_ayah_pria']					= $ayah_pria['rt'];
		$input['rw_ayah_pria']					= $ayah_pria['rw'];
		$input['pekerjaan_ayah_pria']   		= strtoupper($data_surat_ayah['pekerjaan']);

		$input['kdpos_ayah_pria']				= $config['kode_pos'];
		$input['desa_ayah_pria']       			= strtoupper($config['nama_desa']);
	    $input['kec_ayah_pria']       			= strtoupper($config['nama_kecamatan']);
	    $input['kab_ayah_pria']       			= strtoupper($config['nama_kabupaten']);

	     //DATA IBU PRIA
	    $len_tempatlahir_ibu_pria 				= strlen($ibu_pria['tempatlahir']);
		$len_alamat_ibu_pria 					= strlen($ibu_pria['alamat']);
		$input['strlen_tempat_lahir_ibu'] 		= $len_tempatlahir_ibu_pria;
		$input['sisa_kotak_tempat_lahir_ibu']	= 36 - $len_tempatlahir_ibu_pria - 11;
		$input['len_alamat_ibu_pria']			= $len_alamat_ibu_pria;
		$input['sisa_kotak_alamat_ibu_pria']	= 36 - $len_alamat_ibu_pria - 10;

	    $input['nik_ibu_pria'] 					= $ibu_pria['nik'];
		$input['nama_ibu_pria'] 				= strtoupper($ibu_pria['nama']);
		$input['agama_ibu_pria']   				= strtoupper($ibu_pria['agama']);
		$input['tempat_lahir_ibu_pria'] 		= strtoupper($ibu_pria['tempatlahir']);
		$input['tgllahir_ibu_pria']				= $ibu_pria['tanggallahir'];
		$input['tanggal_lahir_ibu_pria'] 		= substr($ibu_pria['tanggallahir'],8,2);
		$input['bulan_lahir_ibu_pria'] 			= substr($ibu_pria['tanggallahir'],5,2);
		$input['tahun_lahir_ibu_pria'] 			= substr($ibu_pria['tanggallahir'],0,4);
		$input['alamat_ibu_pria'] 				= strtoupper($ibu_pria['alamat']);
		$input['rt_ibu_pria']					= $ibu_pria['rt'];
		$input['rw_ibu_pria']					= $ibu_pria['rw'];
		$input['pekerjaan_ibu_pria']   			= strtoupper($data_surat_ibu['pekerjaan']);

		$input['kdpos_ibu_pria']				= $config['kode_pos'];
		$input['desa_ibu_pria']       			= strtoupper($config['nama_desa']);
	    $input['kec_ibu_pria']       			= strtoupper($config['nama_kecamatan']);
	    $input['kab_ibu_pria']       			= strtoupper($config['nama_kabupaten']);
		


	}else{

		
		$len_tempatlahir_pria 					= strlen($input['tempat_lahir_pria']);
		$input['tempat_lahir_pria'] 			= strtoupper($input['tempat_lahir_pria']);
		$input['strlen_tempat_lahir'] 			= $len_tempatlahir_pria;
		$input['sisa_kotak_tempat_lahir']		= 36 - $len_tempatlahir_pria - 11;
		$input['nama_pria'] 					= strtoupper($input['nama_pria']);

		$input['tanggal_lahir_pria'] 			= substr($input['tanggallahir_pria'],0,2);
		$input['bulan_lahir_pria'] 				= substr($input['tanggallahir_pria'],3,2);
		$input['tahun_lahir_pria'] 				= substr($input['tanggallahir_pria'],6,4);

		$input['alamat_pria'] 					= strtoupper($input['alamat_pria']);
		$len_alamat_pria        				= strlen($input['alamat_pria']);
		$input['len_alamat_pria']				= $len_alamat_pria;
		$input['sisa_kotak_alamat_pria']		= 36 - $len_alamat_pria - 10;

		$input['desa_pria']       				= strtoupper($input['desa_pria']);
	    $input['kec_pria']       				= strtoupper($input['kec_pria']);
	    $input['kab_pria']       				= strtoupper($input['kab_pria']);
	    $input['prov_pria']   					= strtoupper($input['prov_pria']);

		$input['anak_ke_pria']   				= ( isset($input['anak_ke_pria'])? strtoupper(trim(to_word($input['anak_ke_pria']))): "" );
		$input['status_kawin_pria']   			= strtoupper($input['status_kawin_pria']);

		//AYAH PRIA
		$len_tempatlahir_ayah_pria 				= strlen($input['tempat_lahir_ayah_pria']);
		$len_alamat_ayah_pria 					= strlen($input['alamat_ayah_pria']);
		$input['strlen_tempat_lahir_ayah'] 		= $len_tempatlahir_ayah_pria;
		$input['sisa_kotak_tempat_lahir_ayah']	= 36 - $len_tempatlahir_ayah_pria - 11;
		$input['len_alamat_ayah_pria']			= $len_alamat_ayah_pria;
		$input['sisa_kotak_alamat_ayah_pria']	= 36 - $len_alamat_ayah_pria - 10;

		$input['nama_ayah_pria'] 				= strtoupper($input['nama_ayah_pria']);
		$input['tempat_lahir_ayah_pria'] 		= strtoupper($input['tempat_lahir_ayah_pria']);

		$input['tanggal_lahir_ayah_pria'] 		= substr($input['tanggallahir_ayah_pria'],0,2);
		$input['bulan_lahir_ayah_pria'] 		= substr($input['tanggallahir_ayah_pria'],3,2);
		$input['tahun_lahir_ayah_pria'] 		= substr($input['tanggallahir_ayah_pria'],6,4);
		$input['alamat_ayah_pria'] 				= strtoupper($input['alamat_ayah_pria']);

		$input['desa_ayah_pria']       			= strtoupper($input['desa_ayah_pria']);
	    $input['kec_ayah_pria']       			= strtoupper($input['kec_ayah_pria']);
	    $input['kab_ayah_pria']       			= strtoupper($input['kab_ayah_pria']);
	    $input['prov_ayah_pria']       			= strtoupper($input['prov_ayah_pria']);

	    //IBU PRIA
		$len_tempatlahir_ibu_pria 				= strlen($input['tempat_lahir_ibu_pria']);
		$len_alamat_ibu_pria 					= strlen($input['alamat_ibu_pria']);
		$input['strlen_tempat_lahir_ibu'] 		= $len_tempatlahir_ibu_pria;
		$input['sisa_kotak_tempat_lahir_ibu']	= 36 - $len_tempatlahir_ibu_pria - 11;
		$input['len_alamat_ibu_pria']			= $len_alamat_ibu_pria;
		$input['sisa_kotak_alamat_ibu_pria']	= 36 - $len_alamat_ibu_pria - 10;

		$input['nama_ibu_pria'] 				= strtoupper($input['nama_ibu_pria']);
		$input['tempat_lahir_ibu_pria'] 		= strtoupper($input['tempat_lahir_ibu_pria']);

		$input['tanggal_lahir_ibu_pria'] 		= substr($input['tanggallahir_ibu_pria'],0,2);
		$input['bulan_lahir_ibu_pria'] 			= substr($input['tanggallahir_ibu_pria'],3,2);
		$input['tahun_lahir_ibu_pria'] 			= substr($input['tanggallahir_ibu_pria'],6,4);
		$input['alamat_ibu_pria'] 				= strtoupper($input['alamat_ibu_pria']);

		$input['desa_ibu_pria']       			= strtoupper($input['desa_ibu_pria']);
	    $input['kec_ibu_pria']       			= strtoupper($input['kec_ibu_pria']);
	    $input['kab_ibu_pria']       			= strtoupper($input['kab_ibu_pria']);
	    $input['prov_ibu_pria']       			= strtoupper($input['prov_ibu_pria']);
		

	}

	// JIKA DATA ISTRI DARI DATABASE
	if ($_SESSION['id_wanita'])
	{
		$wanita 								= $this->get_data_surat($_SESSION['id_wanita']);
		$ibu_wanita 							= $this->get_data_ibu($_SESSION['id_wanita']);
		$ayah_wanita 							= $this->get_data_ayah($_SESSION['id_wanita']);

		$data_surat_ayah_wanita					= $this->get_data_surat($ayah_wanita['id']);
		$data_surat_ibu_wanita					= $this->get_data_surat($ibu_wanita['id']);
		
		//DATA SUAMI
		$len_tempatlahir_wanita 				= strlen($wanita['tempatlahir']);
		$len_alamat_wanita 						= strlen($wanita['alamat']);

		$input['nik_wanita'] 					= $wanita['nik'];
		$input['kk_wanita'] 					= $wanita['no_kk'];
		$input['pasport_wanita'] 				= $wanita['dokumen_pasport'];
		$input['nama_wanita'] 					= strtoupper($wanita['nama']);
		
		$input['tempat_lahir_wanita'] 			= strtoupper($wanita['tempatlahir']);
		$input['strlen_tempat_lahir_wanita'] 	= $len_tempatlahir_wanita;
		$input['sisa_kotak_tempat_lahir_wanita']= 36 - $len_tempatlahir_wanita - 11;

		//$input['tgllahir_wanita']				= $wanita['tanggallahir'];
		$input['tanggal_lahir_wanita'] 			= substr($wanita['tanggallahir'],8,2);
		$input['bulan_lahir_wanita'] 			= substr($wanita['tanggallahir'],5,2);
		$input['tahun_lahir_wanita'] 			= substr($wanita['tanggallahir'],0,4);
		
		$input['alamat_wanita'] 				= strtoupper($wanita['alamat']);
		$input['len_alamat_wanita']				= $len_alamat_wanita;
		$input['rt_wanita']						= $wanita['rt'];
		$input['rw_wanita']						= $wanita['rw'];
		$input['sisa_kotak_alamat_wanita']		= 36 - $len_alamat_wanita - 10;

		$input['kdpos_wanita']					= $config['kode_pos'];
		$input['telpon_wanita']					= $wanita['telepon'];
		$input['desa_wanita']       			= strtoupper($config['nama_desa']);
	    $input['kec_wanita']       				= strtoupper($config['nama_kecamatan']);
	    $input['kab_wanita']       				= strtoupper($config['nama_kabupaten']);
	    $input['prov_wanita']   				= strtoupper($config['nama_propinsi']);
	    $input['pendidikan_wanita']   			= strtoupper($wanita['pendidikan']);
	    $input['agama_wanita']   				= strtoupper($wanita['agama']);
	    $input['pekerjaan_wanita']   			= strtoupper($wanita['pekerjaan']);
	    $input['anak_ke_wanita']   				= ( isset($wanita['kelahiran_anak_ke'])? strtoupper(trim(to_word($wanita['kelahiran_anak_ke']))): "" );
	    $input['status_kawin_wanita']   		= strtoupper($wanita['status_kawin']);
	    $input['suami_ke']						= (isset($input['suami_ke'])? dua_digit($input['suami_ke']):"01");
	    $input['warganegara_wanita']   			= strtoupper($wanita['warganegara']);


	    //DATA AYAH WANITA
	    $len_tempatlahir_ayah_wanita 					= strlen($ayah_wanita['tempatlahir']);
		$len_alamat_ayah_wanita 						= strlen($ayah_wanita['alamat']);
		$input['strlen_tempat_lahir_ayah_wanita'] 		= $len_tempatlahir_ayah_wanita;
		$input['sisa_kotak_tempat_lahir_ayah_wanita']	= 36 - $len_tempatlahir_ayah_wanita - 11;
		$input['len_alamat_ayah_wanita']				= $len_alamat_ayah_wanita;
		$input['sisa_kotak_alamat_ayah_wanita']			= 36 - $len_alamat_ayah_wanita - 10;

	    $input['nik_ayah_wanita'] 						= $ayah_wanita['nik'];
		$input['nama_ayah_wanita'] 						= strtoupper($ayah_wanita['nama']);
		$input['agama_ayah_wanita']   					= strtoupper($ayah_wanita['agama']);
		$input['tempat_lahir_ayah_wanita'] 				= strtoupper($ayah_wanita['tempatlahir']);
		//$input['tgllahir_ayah_wanita']				= $ayah_wanita['tanggallahir'];
		$input['tanggal_lahir_ayah_wanita'] 			= substr($ayah_wanita['tanggallahir'],8,2);
		$input['bulan_lahir_ayah_wanita'] 				= substr($ayah_wanita['tanggallahir'],5,2);
		$input['tahun_lahir_ayah_wanita'] 				= substr($ayah_wanita['tanggallahir'],0,4);
		$input['alamat_ayah_wanita'] 					= strtoupper($ayah_wanita['alamat']);
		$input['rt_ayah_wanita']						= $ayah_wanita['rt'];
		$input['rw_ayah_wanita']						= $ayah_wanita['rw'];
		$input['pekerjaan_ayah_wanita']   				= strtoupper($data_surat_ayah_wanita['pekerjaan']);

		$input['kdpos_ayah_wanita']						= $config['kode_pos'];
		$input['desa_ayah_wanita']       				= strtoupper($config['nama_desa']);
	    $input['kec_ayah_wanita']       				= strtoupper($config['nama_kecamatan']);
	    $input['kab_ayah_wanita']       				= strtoupper($config['nama_kabupaten']);

	     //DATA IBU WANITA
	    $len_tempatlahir_ibu_wanita 					= strlen($ibu_wanita['tempatlahir']);
		$len_alamat_ibu_wanita 							= strlen($ibu_wanita['alamat']);
		$input['strlen_tempat_lahir_ibu_wanita']		= $len_tempatlahir_ibu_wanita;
		$input['sisa_kotak_tempat_lahir_ibu_wanita']	= 36 - $len_tempatlahir_ibu_wanita - 11;
		$input['len_alamat_ibu_wanita']					= $len_alamat_ibu_wanita;
		$input['sisa_kotak_alamat_ibu_wanita']			= 36 - $len_alamat_ibu_wanita - 10;

	    $input['nik_ibu_wanita'] 				= $ibu_wanita['nik'];
		$input['nama_ibu_wanita'] 				= strtoupper($ibu_wanita['nama']);
		$input['agama_ibu_wanita']   			= strtoupper($ibu_wanita['agama']);
		$input['tempat_lahir_ibu_wanita'] 		= strtoupper($ibu_wanita['tempatlahir']);
		$input['tgllahir_ibu_wanita']			= $ibu_wanita['tanggallahir'];
		$input['tanggal_lahir_ibu_wanita'] 		= substr($ibu_wanita['tanggallahir'],8,2);
		$input['bulan_lahir_ibu_wanita'] 		= substr($ibu_wanita['tanggallahir'],5,2);
		$input['tahun_lahir_ibu_wanita'] 		= substr($ibu_wanita['tanggallahir'],0,4);
		$input['alamat_ibu_wanita'] 			= strtoupper($ibu_wanita['alamat']);
		$input['rt_ibu_wanita']					= $ibu_wanita['rt'];
		$input['rw_ibu_wanita']					= $ibu_wanita['rw'];
		$input['pekerjaan_ibu_wanita']   		= strtoupper($data_surat_ibu_wanita['pekerjaan']);

		$input['kdpos_ibu_wanita']				= $config['kode_pos'];
		$input['desa_ibu_wanita']       		= strtoupper($config['nama_desa']);
	    $input['kec_ibu_wanita']       			= strtoupper($config['nama_kecamatan']);
	    $input['kab_ibu_wanita']       			= strtoupper($config['nama_kabupaten']);

		
	}else{

		
		$len_tempatlahir_wanita 					= strlen($input['tempat_lahir_wanita']);
		$input['tempat_lahir_wanita'] 				= strtoupper($input['tempat_lahir_wanita']);
		$input['strlen_tempat_lahir_wanita'] 		= $len_tempatlahir_wanita;
		$input['sisa_kotak_tempat_lahir_wanita']	= 36 - $len_tempatlahir_wanita - 11;
		$input['nama_wanita'] 						= strtoupper($input['nama_wanita']);

		$input['tanggal_lahir_wanita'] 				= substr($input['tanggallahir_wanita'],0,2);
		$input['bulan_lahir_wanita'] 				= substr($input['tanggallahir_wanita'],3,2);
		$input['tahun_lahir_wanita'] 				= substr($input['tanggallahir_wanita'],6,4);

		$input['alamat_wanita'] 					= strtoupper($input['alamat']);
		$len_alamat_wanita        					= strlen($input['alamat_wanita']);
		$input['len_alamat_wanita']					= $len_alamat_wanita;
		$input['sisa_kotak_alamat_wanita']			= 36 - $len_alamat_wanita - 10;

		$input['desa_wanita']       				= strtoupper($input['desa_wanita']);
	    $input['kec_wanita']       					= strtoupper($input['kec_wanita']);
	    $input['kab_wanita']       					= strtoupper($input['kab_wanita']);
	    $input['prov_wanita']   					= strtoupper($input['prov_wanita']);

		$input['anak_ke_wanita']   					= ( isset($input['anak_ke_wanita'])? strtoupper(trim(to_word($input['anak_ke_wanita']))): "" );
		$input['status_kawin_wanita']   			= strtoupper($input['status_kawin_wanita']);

		//AYAH wanita
		$len_tempatlahir_ayah_wanita 				= strlen($input['tempat_lahir_ayah_wanita']);
		$len_alamat_ayah_wanita 					= strlen($input['alamat_ayah_wanita']);
		$input['strlen_tempat_lahir_ayah'] 			= $len_tempatlahir_ayah_wanita;
		$input['sisa_kotak_tempat_lahir_ayah']		= 36 - $len_tempatlahir_ayah_wanita - 11;
		$input['len_alamat_ayah_wanita']			= $len_alamat_ayah_wanita;
		$input['sisa_kotak_alamat_ayah_wanita']		= 36 - $len_alamat_ayah_wanita - 10;

		$input['nama_ayah_wanita'] 					= strtoupper($input['nama_ayah_wanita']);
		$input['tempat_lahir_ayah_wanita'] 			= strtoupper($input['tempat_lahir_ayah_wanita']);

		$input['tanggal_lahir_ayah_wanita'] 		= substr($input['tanggallahir_ayah_wanita'],0,2);
		$input['bulan_lahir_ayah_wanita'] 			= substr($input['tanggallahir_ayah_wanita'],3,2);
		$input['tahun_lahir_ayah_wanita'] 			= substr($input['tanggallahir_ayah_wanita'],6,4);
		$input['alamat_ayah_wanita'] 				= strtoupper($input['alamat_ayah_wanita']);

		$input['desa_ayah_wanita']       			= strtoupper($input['desa_ayah_wanita']);
	    $input['kec_ayah_wanita']       			= strtoupper($input['kec_ayah_wanita']);
	    $input['kab_ayah_wanita']       			= strtoupper($input['kab_ayah_wanita']);
	    $input['prov_ayah_wanita']       			= strtoupper($input['prov_ayah_wanita']);

	    //IBU wanita
		$len_tempatlahir_ibu_wanita 				= strlen($input['tempat_lahir_ibu_wanita']);
		$len_alamat_ibu_wanita 						= strlen($input['alamat_ibu_wanita']);
		$input['strlen_tempat_lahir_ibu'] 			= $len_tempatlahir_ibu_wanita;
		$input['sisa_kotak_tempat_lahir_ibu']		= 36 - $len_tempatlahir_ibu_wanita - 11;
		$input['len_alamat_ibu_wanita']				= $len_alamat_ibu_wanita;
		$input['sisa_kotak_alamat_ibu_wanita']		= 36 - $len_alamat_ibu_wanita - 10;

		$input['nama_ibu_wanita'] 					= strtoupper($input['nama_ibu_wanita']);
		$input['tempat_lahir_ibu_wanita'] 			= strtoupper($input['tempat_lahir_ibu_wanita']);

		$input['tanggal_lahir_ibu_wanita'] 			= substr($input['tanggallahir_ibu_wanita'],0,2);
		$input['bulan_lahir_ibu_wanita'] 			= substr($input['tanggallahir_ibu_wanita'],3,2);
		$input['tahun_lahir_ibu_wanita'] 			= substr($input['tanggallahir_ibu_wanita'],6,4);
		$input['alamat_ibu_wanita'] 				= strtoupper($input['alamat_ibu_wanita']);

		$input['desa_ibu_wanita']       			= strtoupper($input['desa_ibu_wanita']);
	    $input['kec_ibu_wanita']       				= strtoupper($input['kec_ibu_wanita']);
	    $input['kab_ibu_wanita']       				= strtoupper($input['kab_ibu_wanita']);
	    $input['prov_ibu_wanita']       			= strtoupper($input['prov_ibu_wanita']);
		

	}
	
	if(isset($input['id_saksi_1']) && isset($input['id_saksi_1'])){


		$saksi_1 	= $this->get_data_surat($input['id_saksi_1']);
		$saksi_2 	= $this->get_data_surat($input['id_saksi_2']);

		//DATA SAKSI I
	    $len_tempatlahir_saksi_1 					= strlen($saksi_1['tempatlahir']);
		$len_alamat_saksi_1 						= strlen($saksi_1['alamat']);
		$input['strlen_tempat_lahir_saksi_1'] 		= $len_tempatlahir_saksi_1;
		$input['sisa_kotak_tempat_lahir_saksi_1']	= 36 - $len_tempatlahir_saksi_1 - 11;
		$input['len_alamat_saksi_1']				= $len_alamat_saksi_1;
		$input['sisa_kotak_alamat_saksi_1']			= 36 - $len_alamat_saksi_1 - 10;

	    $input['nik_saksi_1'] 						= $saksi_1['nik'];
		$input['nama_saksi_1'] 						= strtoupper($saksi_1['nama']);
		$input['agama_saksi_1']   					= strtoupper($saksi_1['agama']);
		$input['tempat_lahir_saksi_1'] 				= strtoupper($saksi_1['tempatlahir']);
		//$input['tgllahir_saksi_1']				= $saksi_1['tanggallahir'];
		$input['tanggal_lahir_saksi_1'] 			= substr($saksi_1['tanggallahir'],8,2);
		$input['bulan_lahir_saksi_1'] 				= substr($saksi_1['tanggallahir'],5,2);
		$input['tahun_lahir_saksi_1'] 				= substr($saksi_1['tanggallahir'],0,4);
		$input['alamat_saksi_1'] 					= strtoupper($saksi_1['alamat']);
		$input['rt_saksi_1']						= $saksi_1['rt'];
		$input['rw_saksi_1']						= $saksi_1['rw'];
		$input['pekerjaan_saksi_1']   				= strtoupper($saksi_1['pekerjaan']);

		$input['kdpos_saksi_1']						= $config['kode_pos'];
		$input['desa_saksi_1']       				= strtoupper($config['nama_desa']);
	    $input['kec_saksi_1']       				= strtoupper($config['nama_kecamatan']);
	    $input['kab_saksi_1']       				= strtoupper($config['nama_kabupaten']);

	    
	    //DATA SAKSI II
	    $len_tempatlahir_saksi_2 					= strlen($saksi_2['tempatlahir']);
		$len_alamat_saksi_2 						= strlen($saksi_2['alamat']);
		$input['strlen_tempat_lahir_saksi_2'] 		= $len_tempatlahir_saksi_2;
		$input['sisa_kotak_tempat_lahir_saksi_2']	= 36 - $len_tempatlahir_saksi_2 - 11;
		$input['len_alamat_saksi_2']				= $len_alamat_saksi_2;
		$input['sisa_kotak_alamat_saksi_2']			= 36 - $len_alamat_saksi_2 - 10;

	    $input['nik_saksi_2'] 						= $saksi_2['nik'];
		$input['nama_saksi_2'] 						= strtoupper($saksi_2['nama']);
		$input['agama_saksi_2']   					= strtoupper($saksi_2['agama']);
		$input['tempat_lahir_saksi_2'] 				= strtoupper($saksi_2['tempatlahir']);
		//$input['tgllahir_saksi_2']				= $saksi_2['tanggallahir'];
		$input['tanggal_lahir_saksi_2'] 			= substr($saksi_2['tanggallahir'],8,2);
		$input['bulan_lahir_saksi_2'] 				= substr($saksi_2['tanggallahir'],5,2);
		$input['tahun_lahir_saksi_2'] 				= substr($saksi_2['tanggallahir'],0,4);
		$input['alamat_saksi_2'] 					= strtoupper($saksi_2['alamat']);
		$input['rt_saksi_2']						= $saksi_2['rt'];
		$input['rw_saksi_2']						= $saksi_2['rw'];
		$input['pekerjaan_saksi_2']   				= strtoupper($saksi_2['pekerjaan']);

		$input['kdpos_saksi_2']						= $config['kode_pos'];
		$input['desa_saksi_2']       				= strtoupper($config['nama_desa']);
	    $input['kec_saksi_2']       				= strtoupper($config['nama_kecamatan']);
	    $input['kab_saksi_2']       				= strtoupper($config['nama_kabupaten']);
		

	}

		//DATA PERKAWINAN
	
		$input['tgl_nikah'] 				= ( isset($input['tanggal_nikah'])? substr($input['tanggal_nikah'],0,2) : "");
		$input['bln_nikah'] 				= ( isset($input['tanggal_nikah'])? substr($input['tanggal_nikah'],3,2) : "");
		$input['thn_nikah'] 				= ( isset($input['tanggal_nikah'])? substr($input['tanggal_nikah'],6,4) : "");

		$input['tgllapor_nikah'] 			= ( isset($input['tanggal_melapor_nikah'])? substr($input['tanggal_melapor_nikah'],0,2) : "");
		$input['blnlapor_nikah'] 			= ( isset($input['tanggal_melapor_nikah'])? substr($input['tanggal_melapor_nikah'],3,2) : "");
		$input['thnlapor_nikah'] 			= ( isset($input['tanggal_melapor_nikah'])? substr($input['tanggal_melapor_nikah'],6,4) : "");

		$input['anak_diakui_1']				= ( isset($input['anak_diakui_1'])? $input['anak_diakui_1']:"" );
		$input['tanggal_akte_1'] 			= ( isset($input['akte_anak_tanggal_1'])? substr($input['akte_anak_tanggal_1'],0,2) : "");
		$input['bulan_akte_1'] 				= ( isset($input['akte_anak_tanggal_1'])? substr($input['akte_anak_tanggal_1'],3,2) : "");
		$input['tahun_akte_1'] 				= ( isset($input['akte_anak_tanggal_1'])? substr($input['akte_anak_tanggal_1'],6,4) : "");

		$input['anak_diakui_2']				= ( isset($input['anak_diakui_2'])? $input['anak_diakui_2']:"" );
		$input['tanggal_akte_2'] 			= ( isset($input['akte_anak_tanggal_2'])? substr($input['akte_anak_tanggal_2'],0,2) : "");
		$input['bulan_akte_2'] 				= ( isset($input['akte_anak_tanggal_2'])? substr($input['akte_anak_tanggal_2'],3,2) : "");
		$input['tahun_akte_2'] 				= ( isset($input['akte_anak_tanggal_2'])? substr($input['akte_anak_tanggal_2'],6,4) : "");


		$input['anak_diakui_3']				= ( isset($input['anak_diakui_3'])? $input['anak_diakui_3']:"" );
		$input['tanggal_akte_3'] 			= ( isset($input['akte_anak_tanggal_3'])? substr($input['akte_anak_tanggal_3'],0,2) : "");
		$input['bulan_akte_3'] 				= ( isset($input['akte_anak_tanggal_3'])? substr($input['akte_anak_tanggal_3'],3,2) : "");
		$input['tahun_akte_3'] 				= ( isset($input['akte_anak_tanggal_3'])? substr($input['akte_anak_tanggal_3'],6,4) : "");

		$input['anak_diakui_4']				= ( isset($input['anak_diakui_4'])? $input['anak_diakui_4']:"" );
		$input['tanggal_akte_4'] 			= ( isset($input['akte_anak_tanggal_4'])? substr($input['akte_anak_tanggal_4'],0,2) : "");
		$input['bulan_akte_4'] 				= ( isset($input['akte_anak_tanggal_4'])? substr($input['akte_anak_tanggal_4'],3,2) : "");
		$input['tahun_akte_4'] 				= ( isset($input['akte_anak_tanggal_4'])? substr($input['akte_anak_tanggal_4'],6,4) : "");

		$input['anak_diakui_5']				= ( isset($input['anak_diakui_5'])? $input['anak_diakui_5']:"" );
		$input['tanggal_akte_5'] 			= ( isset($input['akte_anak_tanggal_5'])? substr($input['akte_anak_tanggal_5'],0,2) : "");
		$input['bulan_akte_5'] 				= ( isset($input['akte_anak_tanggal_5'])? substr($input['akte_anak_tanggal_5'],3,2) : "");
		$input['tahun_akte_5'] 				= ( isset($input['akte_anak_tanggal_5'])? substr($input['akte_anak_tanggal_5'],6,4) : "");

		$input['anak_diakui_6']				= ( isset($input['anak_diakui_6'])? $input['anak_diakui_6']:"" );
		$input['tanggal_akte_6'] 			= ( isset($input['akte_anak_tanggal_4'])? substr($input['akte_anak_tanggal_6'],0,2) : "");
		$input['bulan_akte_6'] 				= ( isset($input['akte_anak_tanggal_4'])? substr($input['akte_anak_tanggal_6'],3,2) : "");
		$input['tahun_akte_6'] 				= ( isset($input['akte_anak_tanggal_4'])? substr($input['akte_anak_tanggal_6'],6,4) : "");

	
		$input['tanggal_nikah']				= $input['hari_nikah']."/".$input['tanggal_nikah'];
		$input['tanggal_melapor_nikah']		= $input['hari_melapor_nikah']."/".$input['tanggal_melapor_nikah'];
		$input['anak_diakui']				= ( isset($input['anak_diakui'])? dua_digit($input['anak_diakui']):"" );

		
		
		
		
		
		




?>