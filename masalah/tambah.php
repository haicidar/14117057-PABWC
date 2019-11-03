<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <form action="con.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Tambah Data</legend>
            <p>
                <label for="nrp">NRP</label><br>
                <input type="text" name="nrp"><br>
            </p>
            <p>
                <label for="nama">Nama</label><br>
                <input type="text" name="nama"><br>
            </p>
            <p>
                <label for="foto">Foto</label><br>
                <input type="file" name="foto"><br>
            </p>
            <p>
                <label for="id_jur">Jurusan</label><br>
                <select name="id_jur">
                    <?php
                    $conn=mysqli_connect ("localhost","phpmyadmin","f!ndingM3m0")
                    or die ("koneksi gagal");
                    mysqli_select_db($conn,"pabwc");
                    $hasil = mysqli_query($conn, "select * from jurusan");
                    while ($row=mysqli_fetch_array($hasil)) {
                        echo "<option value='".$row['ID_Jur']."'>".$row['Nama']."</option>";
                    }
                    ?>
                </select><br>
            </p>
            <p>
                <button type="submit" name="tambah">Tambah</button>
            </p>
        </fieldset>
    </form>
    <?php
    session_start();

    if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['tipe']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
</body>
</html>