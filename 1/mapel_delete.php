<?php

include "../koneksi.php";

$Kode_Matakuliah	= $_GET["Kode_Matakuliah"];

if($delete = mysqli_query($konek, "DELETE FROM matakuliah WHERE Kode_Matakuliah='$Kode_Matakuliah'")){
	header("Location: mapel.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>