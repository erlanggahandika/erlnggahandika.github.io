<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar user</title>
</head>

<body>
    <table border="1px solid black">
        <tr>
            <th>nama</th>
            <th>usia</th>
            <th>alamat</th>
        </tr>

        <?php foreach ($historia as $mhs) : ?>
            <tr>
                <td><?php echo $mhs['nama'] ?></td>
                <td><?php echo $mhs['usia'] ?></td>
                <td><?php echo $mhs['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>