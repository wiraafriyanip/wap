<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gudang Barang</title>
</head>
<body>
<form action="<?= site_url('gudang'); ?>" method="get">
    <label for="q">Cari Barang:</label>
    <input type="text" name="q" value="<?= $this->input->get('q'); ?>">
    <button type="submit">Cari</button>
</form>
    <h1>Data Barang</h1>
    <table border="1">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>kategori barang</th>
            <th> stok</th>
            <th>Harga Grosir</th>
            <th>Harga ecer</th>
            <th>Harga Sales</th>
            <th>Action</th>
        </tr>
        <?php foreach ($barang as $item): ?>
            <tr>
                <td><?= $item->id_barang; ?></td>
                <td><?= $item->nama_barang; ?></td>
                <td><?= $item->kategori_barang; ?></td>
                <td><?= $item->stok_barang; ?></td>
                <td><?= $item->harga_grosir; ?></td>
                <td><?= $item->harga_ecer; ?></td>
                <td><?= $item->harga_sales; ?></td>
                <td>
                    <a href="<?= site_url('gudang/edit_barang/' . $item->id_barang); ?>">Edit</a>
                    <a href="<?= site_url('gudang/hapus_barang/' . $item->id_barang); ?>" onclick="return confirm('Anda yakin ingin menghapus barang ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="<?= site_url('gudang/tambah_barang'); ?>">Tambah Barang</a>
</body>
</html>
