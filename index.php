<?php
    include('koneksi.php');
    $koneksi = new koneksi('localhost', 'root', '', 'oop_mysql_db');
    if($koneksi->cekTable()===FALSE){
        $koneksi->createTable();
    }
    $read = $koneksi->read();
?>
<html>
<head>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="Nama" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="NIM"  name="nim" id="nim">
                </td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td>:</td>
                <td>
                    <input type="text" placeholder="E-Mail"  name="email" id="email">
                </td>
            </tr>
        </table>
        <input type="submit">
    </form>
    <?php 
        if (isset($_GET['message'])) {
            if ($_GET['message']=="inserted") {
                echo "<p>Data berhasil ditambahkan</p>";
            }
            if ($_GET['message']=="edited") {
                echo "<p>Data berhasil diedit</p>";
            }
            if ($_GET['message']=="deleted") {
                echo "<p>Data berhasil dihapus</p>";
            }
        }
    ?>
    <table>
        <tr>
            <td>Id</td>
            <td>Nama</td>
            <td>NIM</td>
            <td>Email</td>
            <td>Aksi</td>
        </tr>
        <tbody id="tabel">
        </tbody>
    </table>
    <script src="ajax.js"></script>
</body>
</html>