<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    } else {
        $error = "";
    }
    $pesan = "";
    if ($error == "variabel_belum_diset") {
        $pesan = "Anda harus mengakses halaman ini dari form_2.php";
    } else if ($error == "nama_kosong") {
        $pesan = "Nama harus diisi";
    } else if ($error == "email_kosong") {
        $pesan = "Email harus diisi";
    }

    if (isset($_GET['nama']) and isset($_GET['email']) and isset($_GET['komentar'])) {
        $nama = $_GET['nama'];
        $email = $_GET['email'];
        $komentar = $_GET['komentar'];
    } else {
        $nama = "";
        $email = "";
        $komentar = "";
    }

    ?>
    <span class="error"><?php echo $pesan ?></span>
    <table>
        <form method="get" action="prosesForm_2.php">
            <tr>
                <td>Nama: </td>
                <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
            </tr>
            <tr>
                <td>E-mail: </td>
                <td><input type="text" name="email" value="<?php echo $email ?>"></td>
            </tr>
            <tr>
                <td>Komentar: </td>
                <td><textarea rows="5" cols="40" name="komentar" value="<?php echo $koemntar ?>"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Kirim"></td>
            </tr>
        </form>
    </table>

</html>