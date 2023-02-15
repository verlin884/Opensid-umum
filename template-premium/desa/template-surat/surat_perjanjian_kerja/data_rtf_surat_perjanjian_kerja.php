<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
		

		$array_replace = array(
			
	    	"[gajih_terbilang]"	=> number_to_words(str_replace("Rp ", "",str_replace(".", "",$input['gajih']))),
		);

		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	
?>