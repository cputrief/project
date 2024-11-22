<?php
//  1. membuat koneksi 
include_once("../koneksi.php");

//  2. mengambil value dari form
$id = $_POST['id'];
$kode = $_POST['kode'];
$jurusan = $_POST['jurusan'];

//  3. simpan
$sunting = "UPDATE jurusans SET kode='$kode',jurusan='$jurusan' WHERE id='$id'";

//  4. jalankan query
$proses = mysqli_query($koneksi,$sunting);

//  5. mengalihkan halaman menggunakan php
// header("location:index.php");


?>
<!-- 5. mengalihkan halaman menggunakan js ✓  -->
<script>
    document.location="index.php"
</script>


