<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM crud WHERE npm = '" .$_GET['npm']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Data</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Data Mahasiswa</a><br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><input type="text" name="npm" value="<?php echo $result['npm'] ?>" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $result['nama'] ?>" required></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>:</td>
                <td><input type="text" name="telp" value="<?php echo $result['telepon'] ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" value="<?php echo $result['email'] ?>" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                <input type="text" name="jurusan" placeholder="Jurusan" value="<?php echo $result['jurusan'] ?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE crud SET nama = '".$_POST['nama']."',
            telepon = '".$_POST['telp']."', email = '".$_POST['email']."', jurusan = '".$_POST['jurusan']."'
            WHERE npm = '" .$_GET['npm']."'");
        if($update){
            echo 'berhasil edit';
        }else{
            echo 'gagal edit';
        }
    }
    ?>
</body>
</html>
