<center>
    <hr><h1><b>Kegiatan sehari-hari</b></h1><hr>
<b><h2>
<?php
$kegiatan = [
    "Bangun tidur",
    "Mandi",
    "Sarapan",
    "Sekolah",
    "Makan siang",
    "Istirahat",
    "Sekolah lagi",
    "Pulang",
    "Makan malam",
    "Belajar",
    "Tidur"
];

$i = 0;
$jumlahKegiatan = count($kegiatan);

do {
    echo "Kegiatan: " . $kegiatan[$i] . "<br>";
    $i++;
} while ($i < $jumlahKegiatan);
?>
</center></b></h2><hr>