<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari Data</title>
</head>
<body>
    <form action="/subscribe" method="post">
        <fieldset>
            <legend>Cari Data</legend>
            <p>
                <label for="nama">Nama</label><br>
                <input type="text" name="nama"><br>
            </p>
            <p>
            <button type="submit" name="cari">Cari</button>
            </p>
        </fieldset>
    </form>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['NRP'] ?></td>
        <td><?php echo $row['Nama'] ?></td>
        <td><?php echo "<img src=\"img/".$row['foto']."\" class=\"img-fluid mx-auto d-block\" >" ?></td>
    </tr>
    <?php endwhile; ?>
</body>
</html>