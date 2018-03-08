<?php
/*
author : wahyu
create on 26 december 2016
modified on 15 january 2016
*/
namespace Wahyu;
class FileManager {
	
	//return array
	public function listData($dir,$pattern='*'){
		if (is_dir($dir)){
			return glob($dir.$pattern);
		}
		
		return array();
	}

	public function get($file) {
		
		$handle = fopen($file, 'r');

		flock($handle, LOCK_SH);

		$data = fread($handle, filesize($file));

		flock($handle, LOCK_UN);

		fclose($handle);

		return $data;

	}

	public function set($file, $isi) {

		$handle = fopen($file, 'w');

		flock($handle, LOCK_EX);

		fwrite($handle,$isi);

		fflush($handle);

		flock($handle, LOCK_UN);

		fclose($handle);
	}

	public function delete($file) {

		if (is_file($file)) {
			 unlink($file);
		}
	}
	
}
