<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
    <!-- include_once = tidak akan double -->
<?php include_once('../navbar.php') ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header text-left">
                    <h3 class="float-start ">Data Jurusan</h3>
                    <span class="float-end "><a class="btn btn-primary" href="form.php"><i class="fa-solid fa-circle-plus"></i>Tambah Data</a></span>
                </div>
                <div class="card-body">
                <h3></h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Jurusan</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        //  1. membuat koneksi 
                            include_once("../koneksi.php");

                        //  2. menampilkan 
                            $tampil = "SELECT * FROM jurusans";

                        //  3. jalankan query
                            $proses = mysqli_query($koneksi,$tampil);

                        //  4. looping data dari DB
                            $nomor = 1;
                            foreach($proses as $data){

                        ?>
                        <tr>
                        <th scope="row"><?=$nomor++?></th>
                        <td><?=$data['kode']?></td>
                        <td><?=$data['jurusan']?></td>
                        <td>
                            <a class="btn btn-info btn-sm" href=""><i class="fa fa-pen-to-square"></i></a>
                            <a class="btn btn-danger btn-sm" href=""><i class="fa fa-trash"></i></a>
                        </td>
                        </tr>
                        <?php
                            }
                        ?>
                       
                    </tbody>
                    </table>
                    
                </div>
            </div>

        </div>

    </div>


</div>


    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>