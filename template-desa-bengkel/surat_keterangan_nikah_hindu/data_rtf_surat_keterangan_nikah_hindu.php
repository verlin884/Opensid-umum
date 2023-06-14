<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	// Data pasangan pria =====================
	if ($input['id_pria'])
	{
		$pria = $this->get_data_surat($input['id_pria']);
		$ibu_pria = $this->get_data_ibu($input['id_pria']);
		$ayah_pria = $this->get_data_ayah($input['id_pria']);
		$array_replace = array(
                  "[agama_pria]"        => "$pria[agama]",
                  "[alamat_pria]"       => "" . $pria[alamat] .  " RT " . $pria[rt] .  " RW " . $pria[rw] . " $alamat_desa",
                  "[nama_pria]"         => "$pria[nama]",
                  "[no_ktp_pria]"       => "$pria[nik]",
                  "[no_kk_pria]"        => "$pria[no_kk]",
                  "[pekerjaan_pria]"    => "$pria[pekerjaan]",
                  "[sex_pria]"          => "$pria[sex]",
                  "[status_pria]"       => "$pria[status_kawin]",
                  "[tempatlahir_pria]"  => $pria[tempatlahir],
                  "[tanggallahir_pria]" => tgl_indo_dari_str($pria[tanggallahir]),
                  "[usia_pria]"         => "$pria[umur] Tahun",
                  "[wn_pria]"           => "$pria[warganegara]",
		);
		
		if (!isset($input['jumlah_istri'])) $array_replace["[form_jumlah_istri]"] = "";
		
	}else{

		$array_replace = array(

				  "[nama_pria]"         	 => strtoupper($input[nama_pria]),
				  "[no_ktp_pria]"       => $input[nik_pria],
				  "[no_kk_pria]"        => $input[kk_pria],
                  "[tempatlahir_pria]"  => strtoupper($input[tempat_lahir_pria]),
                  "[wn_pria]"           => $input[warganegara_pria],
                  "[alamat_pria]"       	 => ucwords(strtolower($input[alamat_pria])) .  ", RT " . $input[rt_pria] .  ", RW " . $input[rw_pria] . 
                  								", Desa ".ucwords(strtolower($input[desa_pria])). 
                  								", Kec. ".ucwords(strtolower($input[kec_pria])). 
                  								", Kab. ".ucwords(strtolower($input[kab_pria])). 
                  								", Prov. ".ucwords(strtolower($input[prov_pria])),
                  
              );
	}

	$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);

	# Data orang tua apabila warga desa
	if ($ayah_pria)
	{
		$array_replace = array(
                  "[form_nama_ayah_pria]"         => $ayah_pria['nama'],
				  "[form_noktp_ayah_pria]"        => $ayah_pria['nik'],
				  "[form_bin_ayah_pria]"          => $ayah_pria['nama_ayah'],
                  "[form_tempatlahir_ayah_pria]"  => ucwords(strtolower($ayah_pria['tempatlahir'])),
                  "[form_tanggallahir_ayah_pria]" => tgl_indo_dari_str($ayah_pria['tanggallahir']),
                  "[form_wn_ayah_pria]"           => $ayah_pria['wn'],
                  "[form_agama_ayah_pria]"        => ucwords(strtolower($ayah_pria['agama'])),
                  "[form_pekerjaan_ayah_pria]"    => ucwords(strtolower($ayah_pria['pek'])),
                  "[form_alamat_ayah_pria]"       => "" . $ayah_pria[alamat] .  " RT " . $ayah_pria[rt] .  " RW " . $ayah_pria[rw] . " $alamat_desa",
		);
		
	}else{

		$array_replace = array(
                  "[form_nama_ayah_pria]"         => strtoupper($input['nama_ayah_pria']),
                  "[form_alamat_ayah_pria]"       => ucwords(strtolower($input[alamat_ayah_pria])) .  
                  									 ", RT " . $input[rt_ayah_pria] .  
                  									 ", RW " . $input[rw_ayah_pria] . 
                  									 ", Desa ". ucwords(strtolower($input[desa_ayah_pria])).
                  									 ", Kec. ". ucwords(strtolower($input[kec_ayah_pria])).
                  									 ", Kab. ". ucwords(strtolower($input[kab_ayah_pria])).
                  									 ", Prov. ". ucwords(strtolower($input[prov_ayah_pria])),
		);

	}

	$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);

	if ($ibu_pria)
	{
		$array_replace = array(
                  "[form_nama_ibu_pria]"         => $ibu_pria['nama'],
				  "[form_noktp_ibu_pria]"        => $ibu_pria['nik'],
				  "[form_binti_ibu_pria]"        => $ibu_pria['nama_ayah'],
                  "[form_tempatlahir_ibu_pria]"  => ucwords(strtolower($ibu_pria['tempatlahir'])),
                  "[form_tanggallahir_ibu_pria]" => tgl_indo_dari_str($ibu_pria['tanggallahir']),
                  "[form_wn_ibu_pria]"           => $ibu_pria['wn'],
                  "[form_agama_ibu_pria]"        => ucwords(strtolower($ibu_pria['agama'])),
                  "[form_pekerjaan_ibu_pria]"    => ucwords(strtolower($ibu_pria['pek'])),
                  "[form_alamat_ibu_pria]"       => "$ibu_pria[alamat] RT $ibu_pria[rt] RW $ibu_pria[rw] " . " $alamat_desa",
		);
		
	}else{

		$array_replace = array(
                  "[form_nama_ibu_pria]"         => strtoupper($input['nama_ibu_pria']),
                  "[form_alamat_ibu_pria]"       =>  ucwords(strtolower($input[alamat_ibu_pria])).  
                  									 ", RT " . ucwords(strtolower($input[rt_ibu_pria])).  
                  									 ", RW " . ucwords(strtolower($input[rw_ibu_pria])). 
                  									 ", Desa ". ucwords(strtolower($input[desa_ibu_pria])).
                  									 ", Kec. ". ucwords(strtolower($input[kec_ibu_pria])).
                  									 ", Kab. ". ucwords(strtolower($input[kab_ibu_pria])).
                  									 ", Prov. ".ucwords(strtolower($input[prov_ibu_pria])),
		);

	}

	$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);

	// Kode isian yang mungkin tidak terisi
	$buffer = str_replace("[form_istri_dulu]",$input['istri_dulu'], $buffer);

	// Data pasangan wanita =====================
	if ($input['id_wanita'])
	{
		$wanita = $this->get_data_surat($input['id_wanita']);
		$ibu_wanita = $this->get_data_ibu($input['id_wanita']);
		$ayah_wanita = $this->get_data_ayah($input['id_wanita']);
		$array_replace = array(
                  "[form_agama_wanita]"        => $wanita[agama],
                  "[form_alamat_wanita]"       => "$wanita[alamat] RT $wanita[rt]  RW $wanita[rw] " . " $alamat_desa",
                  "[form_nama_wanita]"         => $wanita[nama],
				  "[form_no_ktp_wanita]"       => $wanita[nik],
				  "[form_sex_wanita]"          => $wanita[sex],
				  "[status_wanita]"       	   => $wanita[status_kawin],
                  "[form_pekerjaan_wanita]"    => $wanita[pekerjaan],
                  "[form_tempatlahir_wanita]"  => $wanita[tempatlahir],
                  "[form_tanggallahir_wanita]" => tgl_indo_dari_str($wanita[tanggallahir]),
                  "[form_wn_wanita]"           => $wanita[warganegara],
		);
		
	}else{

		$array_replace = array(

				  "[form_nama_wanita]"         	=> strtoupper($input[nama_wanita]),	
				  "[form_no_ktp_wanita]"        => $input[nik_wanita],
                  "[form_tempatlahir_wanita]"   => ucwords(strtolower($input[tempat_lahir_wanita])),
                  "[form_wn_wanita]"            => $input[warganegara_wanita],
                  "[form_alamat_wanita]"       	=> ucwords(strtolower($input[alamat_wanita])) .  ", RT " . $input[rt_wanita] .  ", RW " . $input[rw_wanita] . 
                  								", Desa ".ucwords(strtolower($input[desa_wanita])). 
                  								", Kec. ".ucwords(strtolower($input[kec_wanita])). 
                  								", Kab. ".ucwords(strtolower($input[kab_wanita])). 
                  								", Prov. ".ucwords(strtolower($input[prov_wanita])),
                  "[form_tanggallahir_wanita]"  => tgl_indo_dari_str($input[tanggallahir_wanita]),
              );
	}

	$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);

	# Data orang tua apabila warga desa
	if ($ayah_wanita)
	{
		$array_replace = array(
                  "[form_nama_ayah_wanita]"         => $ayah_wanita['nama'],
				  "[form_noktp_ayah_wanita]"        => $ayah_wanita['nik'],
				  "[form_bin_ayah_wanita]"          => $ayah_wanita['nama_ayah'],
                  "[form_tempatlahir_ayah_wanita]"  => ucwords(strtolower($ayah_wanita['tempatlahir'])),
                  "[form_tanggallahir_ayah_wanita]" => tgl_indo_dari_str($ayah_wanita['tanggallahir']),
                  "[form_wn_ayah_wanita]"           => $ayah_wanita['wn'],
                  "[form_agama_ayah_wanita]"        => ucwords(strtolower($ayah_wanita['agama'])),
                  "[form_pekerjaan_ayah_wanita]"    => ucwords(strtolower($ayah_wanita['pek'])),
                  "[form_alamat_ayah_wanita]"       => "" . $ayah_wanita[alamat] .  " RT " . $ayah_wanita[rt] .  " RW " . $ayah_wanita[rw] . " $alamat_desa",
		);
		
	}else{

		$array_replace = array(
                  "[form_nama_ayah_wanita]"         => strtoupper($input['nama_ayah_wanita']),
                   "[form_alamat_ayah_wanita]"       => ucwords(strtolower($input[alamat_ayah_wanita])).  
                  									 ", RT " . ucwords(strtolower($input[rt_ayah_wanita])).  
                  									 ", RW " . ucwords(strtolower($input[rw_ayah_wanita])). 
                  									 ", Desa ". ucwords(strtolower($input[desa_ayah_wanita])).
                  									 ", Kec. ". ucwords(strtolower($input[kec_ayah_wanita])).
                  									 ", Kab. ". ucwords(strtolower($input[kab_ayah_wanita])).
                  									 ", Prov. ". ucwords(strtolower($input[prov_ayah_wanita])),
		);
	}

	$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);

	if ($ibu_wanita)
	{
		$array_replace = array(
                  "[form_nama_ibu_wanita]"         => $ibu_wanita['nama'],
				  "[form_noktp_ibu_wanita]"        => $ibu_wanita['nik'],
				  "[form_binti_ibu_wanita]"        => $ibu_wanita['nama_ayah'],
                  "[form_tempatlahir_ibu_wanita]"  => ucwords(strtolower($ibu_wanita['tempatlahir'])),
                  "[form_tanggallahir_ibu_wanita]" => tgl_indo_dari_str($ibu_wanita['tanggallahir']),
                  "[form_wn_ibu_wanita]"           => $ibu_wanita['wn'],
                  "[form_agama_ibu_wanita]"        => ucwords(strtolower($ibu_wanita['agama'])),
                  "[form_pekerjaan_ibu_wanita]"    => ucwords(strtolower($ibu_wanita['pek'])),
                  "[form_alamat_ibu_wanita]"       => "" . $ibu_wanita[alamat] .  " RT " . $ibu_wanita[rt] .  " RW " . $ibu_wanita[rw] . " $alamat_desa",
		);
		
	}else{

		$array_replace = array(
                  "[form_nama_ibu_wanita]"         => strtoupper($input['nama_ibu_wanita']),
                  "[form_alamat_ibu_wanita]"       => ucwords(strtolower($input[alamat_ibu_wanita])).  
                  									 ", RT " . ucwords(strtolower($input[rt_ibu_wanita])).  
                  									 ", RW " . ucwords(strtolower($input[rw_ibu_wanita])). 
                  									 ", Desa ". ucwords(strtolower($input[desa_ibu_wanita])).
                  									 ", Kec. ". ucwords(strtolower($input[kec_ibu_wanita])).
                  									 ", Kab. ". ucwords(strtolower($input[kab_ibu_wanita])).
                  									 ", Prov. ". ucwords(strtolower($input[prov_ibu_wanita])),
		);
	}

	$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);


	# Saksi / Adat / Kuasa

	if(isset($input['id_penerima_kuasa'])){
			$kuasa = $this->get_data_surat($input['id_penerima_kuasa']);
			$alamat_penerima_kuasa 	 = ucwords(strtolower($kuasa['alamat'])).
									   ", RT " . $kuasa[rt].  
                  					   ", RW " . $kuasa[rw]. 
                  					   " ". $alamat_desa;
			$pekerjaan_penerima_kuasa = $kuasa['pekerjaan'];
	}

	$istri_ke	   = ( isset($input['istri_ke'])? to_word($input['istri_ke']): "Pertama" );
	$suami_ke	   = ( isset($input['suami_ke'])? to_word($input['suami_ke']): "Pertama" );
	
	$purusa		   = ( $input['purusa']=="LAKI" ? $pria[nama]: $wanita[nama] );

	$array_replace = array(
                  "[nama_saksi_1]"         		=> $input['saksi_1'],
				  "[nama_saksi_2]"         		=> $input['saksi_2'],
				  "[nama_kelian_adat]"     		=> $input['nama_kelian_adat'],
				  "[nama_rohaniawan]"       	=> strtoupper($input['nama_rohaniawan']),
				  "[nama_banjar_adat]"       	=> $input['nama_banjar_adat'],
				  "[alamat_penerima_kuasa]"     => $alamat_penerima_kuasa,
				  "[pekerjaan_penerima_kuasa]"  => $pekerjaan_penerima_kuasa,
				  "[istri_ke]"       			=> $istri_ke,
				  "[suami_ke]"       			=> $suami_ke,
				  "[purusa]"       				=> strtoupper($purusa),
	);

	$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);

	

	// Kode isian yang mungkin tidak terisi
	$buffer = str_replace("[form_suami_dulu]", $input['nama_suami_dulu'], $buffer);


?>