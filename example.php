<?php
define("Jotp_Apikey", "ZaFt9j9dtgtderfgertretert54"); //Apikey anda
define("Jotp_Pinkey", "4174244813555555"); //Pin apikey anda
require 'JotpClass.php';

$Jotp = new Jotp();
		//print_r($Jotp->getAkun()); //MENDAPATKAN INFORMASI AKUN
		//print_r($Jotp->postOrder(353,"df")); //MEMBELI NOMOR BARU
		//print_r($Jotp->postChangeStatus(243332 , "cancel")); //MERUBAH STATUS
		//print_r($Jotp->getAllOrder()); //MENDAPATKAN SEMUA ORDERAN AKTIF
		//print_r($Jotp->getOrder("578942")); //MENDAPATKAN ORDERAN BERDASARKAN ID ORDER
		//print_r($Jotp->getServices()); //MENDAPATKAN DAFTAR LAYANAN
?>
