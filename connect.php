<?php
	$connection = new mysqli("localhost","root","","data_penduduk");
	if(!$connection){
		echo "Connection Error!";
		exit();
	}