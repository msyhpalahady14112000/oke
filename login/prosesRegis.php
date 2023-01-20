<?php
require "../koneksi.php";
//get data from form registrion
$nim = $_POST['nim'];
$nama = $_POST['nama_lengkap'];
$tlp = $_POST['tlp'];
//insert data ke table registrasi</td>
$insert = "INSERT INTO register (nim,nama_lengkap,tlp)
VALUES ('$nim','$nama','$tlp')";

$hasil = mysqli_query($conn, $insert);
if (!$hasil) {
    echo "ERROR : " . $insert . "  " . mysqli_error($conn);
} else {
    echo "data sukses direkam";
}
