<?php
$mysqli = new mysqli('localhost', 'phpmyadmin', 'f!ndingM3m0', 'pabwc') or die(mysqli_error($mysqli));

if(isset($_POST['tambah'])){
    $target = "img/";
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    
    // pindahkan file
    $terupload = move_uploaded_file($tmp, $target.$foto);
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $id_jur = $_POST['id_jur'];
    $sql = "INSERT INTO mahasiswa VALUES ($nrp, '$nama', '$foto', '$id_jur')";
    mysqli_query($mysqli, $sql);
    $_SESSION['message'] = "Data sudah disimpan";
    $_SESSION['tipe'] = "success";
    header('Location: tambah.php');
}

if(isset($_POST['hapus'])){
    $nama = $_POST['nama'];
    $sql = "DELETE FROM mahasiswa WHERE nama=$nama";
    mysqli_query($mysqli, $sql);

    $_SESSION['message'] = "data sudah dihapus";
    $_SESSION['tipe'] = "bahaya";
    header('Location: hapus.php');
}
?>