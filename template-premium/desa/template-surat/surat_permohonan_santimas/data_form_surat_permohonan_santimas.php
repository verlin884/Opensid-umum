<?php 
if (!defined('BASEPATH')) exit ('No direct script access allowed');

$data['mati'] = $this->penduduk_model->list_penduduk_status_dasar(2); // status mati
?>