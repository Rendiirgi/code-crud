<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="form-input.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Tambah Data</a> 
    <table border="1" cellspacing="0" width="60%"> 
        <tr style="text-align:center;font-weight:bold;background-color:#eee;"> <br><br>
            <td>No</td>
            <td>NPM</td>
            <td>Nama_Mahasiswa</td>
            <td>Telepon</td>
            <td>Email</td>
            <td>Jurusan</td></td>
            <td>Opsi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $select = mysqli_query($conn, "SELECT * FROM mahasiswa");
        if(mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr style="text-align:center">
            <td><?php echo $no++ ?></td>
            <td><?php echo $hasil['npm'] ?></td>
            <td><?php echo $hasil['nama_lengkap'] ?></td>
            <td><?php echo $hasil['telepon'] ?></td>
            <td><?php echo $hasil['email'] ?></td>
            <td><?php echo $hasil['jurusan'] ?></td>
            <td>
                <a href="form-edit.php?npm=<?php echo $hasil['npm'] ?>">Edit</a> ||
                <a href="delete.php?npm=<?php echo $hasil['npm'] ?>">Hapus</a>
            </td>
        </tr>
        <?php }}else{?>
        <tr>
            <td colspan="7" align="center">Data Kosong</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
