<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center">Form Registrasi</h1>
    <hr>
    <form action="prosesRegis.php" method="post">
        <table align="center">
            <tr>
                <td>
                    <label for="">NIM</label>
                </td>
                <td>:</td>
                <td>
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Nama Lengkap</label>
                </td>

                <td>:</td>
                <td>
                    <input type="text" name="nama_lengkap">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">TLP/WA</label>
                </td>

                <td>:</td>
                <td>
                    <input type="text" name="tlp"> <br>

                </td>
            <tr>
                <td>
                    <label for="">password</label>
                </td>
                <td>:

                </td>
                <td>
                    <input type="text" name="password">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>