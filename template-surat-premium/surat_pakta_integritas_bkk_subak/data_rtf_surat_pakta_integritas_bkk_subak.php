<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
		

		$array_replace = array(
	    "[tanggal_surat]"		=> tgl_indo2(rev_tgl($input['tanggal_surat'])),
	    "[terbilang_belanja]"	=> number_to_words(str_replace("Rp ", "",str_replace(".", "",$input['nilai_belanja']))),
	    "[tanggal_dpa]"			=> tgl_indo2(rev_tgl($input['tanggal_dpa']))
		);

		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	
?>