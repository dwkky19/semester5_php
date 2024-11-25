<?php
$myfile = fopen("newfile.txt", "w") or die("Tidak dapat membuka
file!");
$txt = "Saya mahasiswa\n";fwrite($myfile, $txt);
$txt = "Universitas Insan Pembangunan Indonesia\n";
fwrite($myfile, $txt);
fclose($myfile);
?>