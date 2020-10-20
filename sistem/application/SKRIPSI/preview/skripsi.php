<?php 
    if (isset($_GET['filename'])) {
    	$filename = $_GET['filename'];
	// Store the file name into variable 
	$file = '../../../assets/dokumen_skripsi/'.$filename; 
	$filename = '../../../assets/dokumen_skripsi/'.$filename; 

	// Header content type 
	header('Content-type: application/pdf'); 

	header('Content-Disposition: inline; filename="' . $filename . '"'); 

	header('Content-Transfer-Encoding: binary'); 

	header('Accept-Ranges: bytes'); 

	// Read the file 
	@readfile($file); 

    }


?>