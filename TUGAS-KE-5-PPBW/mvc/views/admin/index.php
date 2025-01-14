<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/styleindexadmin.css">
</head>
<body>
<h2>Halaman Admin</h2>
<a href="<?= BASEURL; ?>index.php?url=admin/add">Tambah Item</a> | <a href="<?= BASEURL; ?>index.php?url=login/logout">Logout</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($data['items'] as $item): ?>
    <tr>
        <td><?= $item['id']; ?></td>
        <td><?= $item['nama']; ?></td>
        <td><?= $item['stok']; ?></td>
        <td><?= $item['harga']; ?></td>
        <td>
            <a href="<?= BASEURL; ?>index.php?url=admin/edit/<?= $item['id']; ?>">Edit</a> |
            <a href="<?= BASEURL; ?>index.php?url=admin/delete/<?= $item['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>