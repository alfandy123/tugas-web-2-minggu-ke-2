<html>
<head>
<title> TipeData </title>
</head>
<body>
<?php 
$nim = "A22.2019.02731";
$nama = ' Alfandy Heri P';
$umur = 19;
$nilai = 82.25;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>",$nilai);
if($status)
	echo "Status : Aktif";
else
	echo "Status : Tidak Aktif";
?>
</body>
</html>