<?php
if ($_POST) {
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga_produk = $_POST['harga_produk'];
    $foto_produk = $_POST['foto_produk'];

    if (empty($nama_produk)) {
        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } elseif (empty($deskripsi)) {
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } elseif (empty($harga_produk)) {
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } elseif (empty($foto_produk)){ 
        echo "<script>alert('foto tidak boleh kosong');location.href='tambah_produk.php';</script>";
        
    }else {
        include "toko.php";
        $insert = mysqli_query($conn, "insert into produk (nama_produk, deskripsi, harga_produk, foto_produk) value ('" . $nama_produk . "','" . $deskripsi. "','" . $harga_produk. "','" . $foto_produk. "')");
        if ($insert) {
            echo "<script>alert('Sukses menambahkan produk');location.href='tambah_produk.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";
        }
    }
}
?>