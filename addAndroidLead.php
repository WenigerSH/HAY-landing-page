<?php
if(!empty($_POST['email'])) {
	$mail = $_POST['email'];
	// validation should be on front-end side
	// append e-mail to txt list
	$file = 'androidLeads.txt';
	// Open the file to get existing content
	$current = file_get_contents($file);
	// Append a new person to the file
	$current .= "$mail\n";
	// Write the contents back to the file
	file_put_contents($file, $current);
	echo "OK";
}