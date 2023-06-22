<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM vendor WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data vendor dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Nama vendor</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>kota</td>
            <td><?=$row['kota']?></td>
        </tr>
        <tr>
            <td>kontak</td>
            <td><?=$row['kontak']?></td>
        </tr>
    </tbody>
</table>
