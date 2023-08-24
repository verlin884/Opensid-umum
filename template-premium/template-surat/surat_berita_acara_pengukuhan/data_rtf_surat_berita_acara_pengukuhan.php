<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
	/*
		
	*/
		
		$array_replace = array(
	    	"[tanggal_pengukuhan]"			=> tgl_indo2(rev_tgl($input['tanggal_pengukuhan'])),
	    	"[hari_pengukuhan]"				=> hari(strtotime(rev_tgl($input['tanggal_pengukuhan']))),
		);

		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	

	

	?>