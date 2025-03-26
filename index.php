<?php
include "dbconfig.php";

$sqlStatement = "SELECT * FROM film";
$query = mysqli_query($conn, $sqlStatement);
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>

<body>
    <h1>Daftar Film</h1>
    <?php
    if (count($data) == 0) {
    ?>
        Data film masih kosong.
    <?php
    } else {
    ?>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Judul</th>
                <th>Sutradara</th>
                <th>Tahun Rilis</th>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                ?>
                    <tr>
                        <td><?= $row["id_film"] ?></td>
                        <td><?= $row["judul"] ?></td>
                        <td><?= $row["sutradara"] ?></td>
                        <td><?= $row["tahun_rilis"] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    mysqli_close($conn);
    ?>
</body>

</html>
