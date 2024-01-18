<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <?= validation_errors(); ?>
    <?= form_open('gudang/tambah_barang'); ?>
    <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang"  required>
        <br>
        <label for="kategori_barang">kategori</label>
        <input type="text" name="kategori_barang"  required>
        <br>
        <label for="stok_barang">Stok</label>
        <input type="number" name="stok_barang" required>
        <br>
        <label for="harga_grosir">harga grosir</label>
        <input type="number" name="harga_grosir"  required>
        <br>
        <label for="harga_ecer">harga_ecer</label>
        <input type="number" name="harga_ecer"  required>
        <br>
        <label for="harga_sales">harga_sales</label>
        <input type="number" name="harga_sales"  required>
        <button type="submit">Simpan</button>
    <?= form_close(); ?>
</body>
</html>
