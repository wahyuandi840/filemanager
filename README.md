# filemanager
Libary Sederhana Untuk memanipulasi File
```
**Penggunaan**
```
Download package dengan composer
```
composer require wahyuandi840/filemanager
```
atau
```
{
	"require": {
		"wahyuandi840/filemanager" : "dev-master"
	}
}
```
Penggunaan
membuat file
```php
$nama_file='coba.txt';
$isi_file='ini contoh file';
$filemanager=new Wahyu\FileManager();
$filemanager->set($nama_file,$isi_file);
```
membaca isi file
```php
$output=$filemanager->get($nama_file);
