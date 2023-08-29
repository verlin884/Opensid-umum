<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
	/*
		
	*/
		
		

		$array_replace = array(
	    "[isi]"        				=> str_replace("\n", "\\par ",$input['isi']),
	    "[peruntukan]"        		=> strtoupper($input['peruntukan']),
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	

	

	?>