<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>
    
    <?= validation_errors(); ?>
    <?= form_open('gudang/edit_barang/' . $barang->id_barang); ?>
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" value="<?= $barang->nama_barang; ?>" required>
        <br>
        <label for="kategori_barang">kategori</label>
        <input type="text" name="kategori_barang" value="<?= $barang->kategori_barang; ?>" required>
        <br>
        <label for="stok_barang">Stok</label>
        <input type="number" name="stok_barang" value="<?= $barang->stok_barang; ?>" required>
        <br>
        <label for="harga_grosir">harga grosir</label>
        <input type="number" name="harga_grosir" value="<?= $barang->harga_grosir; ?>" required>
        <br>
        <label for="harga_ecer">harga_ecer</label>
        <input type="number" name="harga_ecer" value="<?= $barang->harga_ecer; ?>" required>
        <br>
        <label for="harga_sales">harga_sales</label>
        <input type="number" name="harga_sales" value="<?= $barang->harga_sales; ?>" required>
        
        <button type="submit">Simpan</button>
    <?= form_close(); ?>
    
</body>
</html>
