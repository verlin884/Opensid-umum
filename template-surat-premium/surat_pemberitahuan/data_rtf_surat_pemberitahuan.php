<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
	/*
		
	*/
		
		if( !empty($input['jabatan_mengetahui']) || !empty($input['nama_mengetahui'])){
			$mengetahui="Mengetahui";
		}else{
			$mengetahui="";
		}

		if(!empty($input['tembusan_1']) || !empty($input['tembusan_2']) || !empty($input['tembusan_3']) || !empty($input['tembusan_4'])){
			$tembusan="Tembusan disampaikan kepada Yth:";
		}else{
			$tembusan="";
		}


		$array_replace = array(
	    
	    	"[mengetahui]"		=> $mengetahui,
	    	"[tembusan]"		=> $tembusan,
	    	"[keterangan]"		=> str_replace("\n", "\\par ",$input['keterangan']),
	    	"[paragraf_2]"		=> str_replace("\n", "\\par ",$input['paragraf_2']),
	    	"[paragraf_3]"		=> str_replace("\n", "\\par ",$input['paragraf_3']),


	    );
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	

	

	?>