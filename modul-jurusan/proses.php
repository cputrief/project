<?php
//  1. membuat koneksi 
include_once("../koneksi.php");

//  2. mengambil value dari form
$kode = $_POST['kode'];
$jurusan = $_POST['jurusan'];

//  3. simpan
$simpan = "INSERT INTO jurusans(kode,jurusan) VALUES ('$kode','$jurusan')";

//  4. jalankan query
$proses = mysqli_query($koneksi,$simpan);

//  5. mengalihkan halaman menggunakan php
// header("location:index.php");


?>
<!-- 5. mengalihkan halaman menggunakan js ✓  -->
<script>
    document.location="index.php"
</script>


