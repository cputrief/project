<?php
//  1. membuat koneksi 
include_once("../koneksi.php");

//  2. mengambil id dari tombol hapus
$id = $_GET['scop'];


//  3. simpan
$hapus = "DELETE FROM jurusans WHERE id='$id'";

//  4. jalankan query
$proses = mysqli_query($koneksi,$hapus);

//  5. mengalihkan halaman menggunakan php
// header("location:index.php");


?>
<!-- 5. mengalihkan halaman menggunakan js ✓  -->
<script>
    document.location="index.php"
</script>


