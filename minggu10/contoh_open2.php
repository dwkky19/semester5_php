<?php
$myfile = fopen("newfile.txt", "w");
if(!$myfile){
echo "<b>File tidak dapat dibuka atau belum ada</b>";
}else{
$txt = "Saya mahasiswa\n";
fwrite($myfile, $txt);
$txt = "Universitas Insan Pembangunan Indonesia\n";
fwrite($myfile, $txt);
fputs ($myfile, "Jurusan Sistem Informasi\n");
}
fclose($myfile);
?>