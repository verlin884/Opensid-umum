<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
		$terbilang_luas= ($input['luas_tanah']) . " M2  ( " . str_replace("Rupiah", "Meter Persegi", number_to_words($input['luas_tanah']))." )";
	$buffer=str_replace( "[luas_tanah]","$terbilang_luas",$buffer );
	
	if (isset($input['harga_tanah']))
		$harga_tanah = preg_replace("/[^0-9]/", "", $input['harga_tanah']);
		$buffer = str_replace("[harga_tanah]", Rupiah($harga_tanah), $buffer);
		$buffer = str_replace("[tbl_harga_tanah]", ucwords(number_to_words($harga_tanah)), $buffer);
		
	/*
	Jika pemohon warga desa, ganti kolom isiannya dengan data dari database penduduk
	*/

	if ($input['nik'])
	{
		$array_replace = array(
		"[nama_non_warga]"          => $individu['nama'],
	    "[tempatlahir_pemohon]"		=> $individu['tempatlahir'],
	    "[tanggallahir_pemohon]"	=> tgl_indo_dari_str($individu['tanggallahir']),
	    "[umur_pemohon]"  			=> $individu['umur'],
	    "[pekerjaan_pemohon]" 		=> $individu['pekerjaan'],
	    "[nik_non_warga]"			=> $individu['nik'],
		"[jeniskelamin_pemohon]"	=> $individu['sex'],
		"[alamat_pemohon]"   		=> $individu['alamat_wilayah']." ".ucwords($this->setting->sebutan_desa)." ".$config['nama_desa']." ".ucwords($this->setting->sebutan_kecamatan)." ".$config['nama_kecamatan']." ".ucwords($this->setting->sebutan_kabupaten)." ".$config['nama_kabupaten']
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	}
	else
	{
		$array_replace = array(
      "[umur_pemohon]"  				=> umur($input['tanggallahir_pemohon'])
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	}

	/*
		Jika saksi1 warga desa, ganti kolom isiannya dengan data dari database penduduk
	*/
	if ($input['id_saksi1'])
	{
		$saksi1 = $this->get_data_surat($input['id_saksi1']);
		$array_replace = array(
	    "[namasaksii]"        		=> $saksi1['nama'],
	    "[umursaksii]"  			=> $saksi1['umur'],
	    "[pekerjaansaksii]" 		=> $saksi1['pekerjaan'],
	    "[alamatsaksii]"   			=> $saksi1['alamat_wilayah']." ".ucwords($this->setting->sebutan_desa)." ".$config['nama_desa']." ".ucwords($this->setting->sebutan_kecamatan)." ".$config['nama_kecamatan']." ".ucwords($this->setting->sebutan_kabupaten)." ".$config['nama_kabupaten']
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	}

	/*
		Jika saksi2 warga desa, ganti kolom isiannya dengan data dari database penduduk
	*/
	if ($input['id_saksi2'])
	{
		$saksi2 = $this->get_data_surat($input['id_saksi2']);
		$array_replace = array(
	    "[namasaksiii]"        		=> $saksi2['nama'],
	    "[umursaksiii]"  			=> $saksi2['umur'],
	    "[pekerjaansaksiii]" 		=> $saksi2['pekerjaan'],
	    "[alamatsaksiii]"  			=> $saksi2['alamat_wilayah']." ".ucwords($this->setting->sebutan_desa)." ".$config['nama_desa']." ".ucwords($this->setting->sebutan_kecamatan)." ".$config['nama_kecamatan']." ".ucwords($this->setting->sebutan_kabupaten)." ".$config['nama_kabupaten']
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	}
/*
		Jika penerimahibahii warga desa, ganti kolom isiannya dengan data dari database penduduk
	*/
	if ($input['id_penerimahibahii'])
	{
		$penerimahibahii = $this->get_data_surat($input['id_penerimahibahii']);
		$array_replace = array(
	    "[nama_penerimahibahii]" => $penerimahibahii['nama'],
	    "[nik_penerimahibahii]" => $penerimahibahii['nik'],
		"[jkpenerimahibahii]" => $penerimahibahii['sex'],
	    "[tempat_lahir_penerimahibahii]" => $penerimahibahii['tempatlahir'],
	  	"[tanggal_lahir_penerimahibahii]" => tgl_indo_dari_str($penerimahibahii['tanggallahir']),
	    "[umur_penerimahibahii]" => $penerimahibahii['umur'],
		"[warga_negara_penerimahibahii]" => $penerimahibahii['warganegara'],
		"[alamat_penerimahibahii]" => $penerimahibahii['alamat_wilayah'],
	    "[pekerjaanpenerimahibahii]" => $penerimahibahii['pekerjaan'],
	    "[form_desapenerimahibahii]" => $config['nama_desa'],
	    "[form_kecpenerimahibahii]" => $config['nama_kecamatan'],
	    "[form_kabpenerimahibahii]" => $config['nama_kabupaten'],
	    "[form_provinsipenerimahibahii]" => $config['nama_propinsi']
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	}


?>
