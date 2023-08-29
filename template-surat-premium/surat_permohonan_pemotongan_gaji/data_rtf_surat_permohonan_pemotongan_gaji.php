<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
		

		$array_replace = array(
	    "[jumlah_potong]"       => rupiah($input['jumlah_potong']),
	    "[terbilang]"        	=> number_to_words($input['jumlah_potong']),
	    "[tanggal_surat]"		=> tgl_indo2(rev_tgl($input['tanggal_surat'])),
		);

		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	
?>