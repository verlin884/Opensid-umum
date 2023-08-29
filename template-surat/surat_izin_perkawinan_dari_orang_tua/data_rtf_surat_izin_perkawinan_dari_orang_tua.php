<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
	
	# Data yang diberi izin dari database penduduk
	if ($input['nik'])
	{
		$pria  = $this->get_data_surat($input['nik']);
		$ayah  = $this->get_data_ayah($input['nik']);
		$ibu   = $this->get_data_ibu($input['nik']);
		
		$warganegara = $this->penduduk_model->list_warganegara();
		$pekerjaan = $this->penduduk_model->list_pekerjaan();

		foreach ($warganegara as $data) {

			if ($data['id']==$ayah['warganegara_id']) {
				$ayah_warganegara=ucwords(strtolower($data['nama']));
			}

			if ($data['id']==$ibu['warganegara_id']) {
				$ibu_warganegara= ucwords(strtolower($data['nama']));
			}
		}

		foreach ($pekerjaan as $data) {

			if ($data['id']==$ayah['pekerjaan_id']) {
				$ayah_pekerjaan=ucwords(strtolower($data['nama']));
			}

			if ($data['id']==$ibu['pekerjaan_id']) {
				$ibu_pekerjaan= ucwords(strtolower($data['nama']));
			}
		}		

		$array_replace = array(
	    "[no_ktp_pria]"     		=> $pria['nik'],
	    "[nama_pria]"     			=> $pria['nama'],
	    "[tempatlahir_pria]"  		=> $pria['tempatlahir'],
	    "[tanggallahir_pria]"		=> tgl_indo_dari_str($pria['tanggallahir']),
	    "[wn_pria]"  				=> $pria['warganegara'],
	    "[agama_pria]"       		=> $pria['agama'],
	    "[pekerjaan_pria]" 			=> $pria['pekerjaan'],
	    "[alamat_pria]"    			=> $pria['alamat'].",".$pria['dusun'],
	    "[dusun_pria]"    			=> $pria['dusun'],

	    "[noktp_ayah_pria]"     	=> $ayah['nik'],
	    "[nama_ayah_pria]"     		=> $ayah['nama'],
	    "[tempatlahir_ayah_pria]"  	=> $ayah['tempatlahir'],
	    "[tanggallahir_ayah_pria]"	=> tgl_indo_dari_str($ayah['tanggallahir']),
	    "[wn_ayah_pria]"  			=> $ayah_warganegara,
	    "[agama_ayah_pria]"       	=> $ayah['agama'],
	    "[pekerjaan_ayah_pria]" 	=> $ayah_pekerjaan,
	    "[alamat_ayah_pria]"    	=> $ayah['alamat'].",".$ayah['dusun'],
	    "[dusun_ayah_pria]"    		=> $ayah['dusun'],

	    "[noktp_ibu_pria]"     		=> $ibu['nik'],
	    "[nama_ibu_pria]"     		=> $ibu['nama'],
	    "[tempatlahir_ibu_pria]"  	=> $ibu['tempatlahir'],
	    "[tanggallahir_ibu_pria]"	=> tgl_indo_dari_str($ibu['tanggallahir']),
	    "[wn_ibu_pria]"  			=> $ibu_warganegara,
	    "[agama_ibu_pria]"       	=> $ibu['agama'],
	    "[pekerjaan_ibu_pria]" 		=> $ibu_pekerjaan,
	    "[alamat_ibu_pria]"    		=> $ibu['alamat'].",".$ibu['dusun'],
	    "[dusun_ibu_pria]"    		=> $ibu['dusun'],
	    
		);

		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	}

	if(!empty($input['id_pasangan'])){

		$wanita = $this->get_data_surat($input['id_pasangan']);
		$array_replace = array(

	    "[no_ktp_wanita]"     		=> $wanita['nik'],
	    "[nama_wanita]"     		=> $wanita['nama'],
	    "[tempatlahir_wanita]"  	=> $wanita['tempatlahir'],
	    "[tanggallahir_wanita]"		=> tgl_indo_dari_str($wanita['tanggallahir']),
	    "[wn_wanita]"  				=> $wanita['warganegara'],
	    "[agama_wanita]"       		=> $wanita['agama'],
	    "[pekerjaan_wanita]" 		=> $wanita['pekerjaan'],
	    "[alamat_wanita]"    		=> $wanita['alamat'].",".$wanita['dusun'],
	    "[dusun_wanita]"    		=> $wanita['dusun'],
	    "[nama_des_wanita]"    		=> $config['nama_desa'],
	    "[nama_kec_wanita]"    		=> $config['nama_kecamatan'],
	    "[nama_kab_wanita]"    		=> $config['nama_kabupaten'],
	    "[nama_prov_wanita]"    	=> $config['nama_propinsi'],
		);

		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);

	}else{

		$array_replace = array(
	    "[no_ktp_wanita]"     		=> $input['nik_pasangan'],
	    "[nama_wanita]"     		=> $input['nama_pasangan'],
	    "[tempatlahir_wanita]"  	=> $input['tempat_lahir_pasangan'],
	    "[tanggallahir_wanita]"		=> tgl_indo_dari_str($input['tanggal_lahir_pasangan']),
	    "[wn_wanita]"  				=> $input['warganegara_pasangan'],
	    "[agama_wanita]"       		=> $input['agama_pasangan'],
	    "[pekerjaan_wanita]" 		=> $input['pekerjaan_pasangan'],
	    "[alamat_wanita]"    		=> $input['alamat_pasangan'].",".$input['dusun_pasangan'],
	    "[nama_des_wanita]"    		=> $input['desapasangan'],
	    "[nama_kec_wanita]"    		=> $input['kecpasangan'],
	    "[nama_kab_wanita]"    		=> $input['kabpasangan'],
	    "[nama_prov_wanita]"    	=> $input['provinsipasangan'],
		);

		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	}


	$array_replace = array(
	    "[array]"     		=> json_encode($ayah),
	    
	);

	$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);

?>
