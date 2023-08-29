<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
	/*
		
	*/
		
		if(!empty($input['tembusan_1']) || !empty($input['tembusan_2']) || !empty($input['tembusan_3']) || !empty($input['tembusan_4'])){
			$tembusan="Tembusan disampaikan kepada Yth:";
		}else{
			$tembusan="";
		}

		$array_replace = array(
	    
	    	"[hari]"				=> hari(strtotime(rev_tgl($input['tanggal']))),
	    	"[tanggal]"				=> tgl_indo2(rev_tgl($input['tanggal'])),
	    	"[tanggal_kematian]"	=> tgl_indo2(rev_tgl($input['tanggal_kematian'])),
	    	"[tembusan]"			=> $tembusan,
	    	
	    
	    
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	

	

	?>