<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body id="#navbar">
    <!-- Navigasi bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Tinfor Media</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#navbar">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mhs"> Data Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Profile -->
    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="img/logo.png" alt="logo" width="200">
                </div>
                <div class="text-white col-md-6 pt-5">
                    <p class="h1">Selamat datang</p>
                    <p class="h2">Di website mahasiswa  Informatika</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Mahasiswa -->
    <section id="mhs">
        <div class="container">
            <div class="row">
                <h2>DATA Mahasiswa</h2>
                <a href="form-input.php"" class=" btn btn-success w-25 rounded rounded-3">Add Data!</a>
            </div>
            <div class="row pt-4 ">
                <table border="1" cellspacing="0" width="60%">
                    <tr style="text-align:start;font-weight:bold;background-color:#eee;"> <br><br>
                        <td>No</td>
                        <td>NPM</td>
                        <td>Nama Mahasiswa</td>
                        <td>Telepon</td>
                        <td>Email</td>
                        <td>Jurusan</td>
                        <td>Opsi</td>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $select = mysqli_query($conn, "SELECT * FROM crud");
                    if (mysqli_num_rows($select) > 0) {
                        while ($hasil = mysqli_fetch_array($select)) {
                    ?>
                            <tr style="text-align:start">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $hasil['npm'] ?></td>
                                <td><?php echo $hasil['nama'] ?></td>
                                <td><?php echo $hasil['telepon'] ?></td>
                                <td><?php echo $hasil['email'] ?></td>
                                <td><?php echo $hasil['jurusan'] ?></td>
                                <td class="d-flex gap-3">
                                    <a href="form-edit.php?npm=<?php echo $hasil['npm'] ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="delete.php?npm=<?php echo $hasil['npm'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="7" align="center">Data Kosong</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>