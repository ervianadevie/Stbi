<?php
$con= mysql_connect("localhost","root"," ","dbstbi");
if($con)
(
	die ('koneksi ke database gagal: '.mysql_error())
)	
mysql_select_db("dbstbi",$con);
?>