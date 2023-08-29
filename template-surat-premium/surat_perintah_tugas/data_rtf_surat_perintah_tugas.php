<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
	/*
		
	*/
		
		if(!empty($input['tembusan_1']) || !empty($input['tembusan_2']) || !empty($input['tembusan_3']) || !empty($input['tembusan_4'])){
			$tembusan="Tembusan disampaikan kepada Yth:";
		}else{
			$tembusan="";
		}

		$array_replace = array(
	    
	    	"[hari_mulai]"			=> hari(strtotime(rev_tgl($input['tgl_mulai']))),
	    	"[hari_akhir]"			=> hari(strtotime(rev_tgl($input['tgl_akhir']))),
	    	"[tgl_mulai]"			=> tgl_indo2(rev_tgl($input['tgl_mulai'])),
	    	"[tgl_akhir]"			=> tgl_indo2(rev_tgl($input['tgl_akhir'])),
	    	"[tanggal_surat]"		=> tgl_indo2(rev_tgl($input['tanggal_surat'])),
	    	"[tembusan]"			=> $tembusan,
	    	
	    
	    
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	

	

	?>