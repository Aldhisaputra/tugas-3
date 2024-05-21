<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Data Barang</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f2f2f2;
}
h2 {
text-align: center;
margin-bottom: 20px;
color: #333;
}
table {
width: 100%;
border-collapse: collapse;
margin: 0 auto;
background-color: #fff;
}
th,
td {
border: 1px solid #ddd;
padding: 12px;
text-align: left;
}
th {
background-color: #f2f2f2;
}
tr:nth-child(even) {
background-color: #f9f9f9;
}
tr:hover {
background-color: #f2f2f2;
}
input[type="text"] {
padding: 10px;
margin-bottom: 10px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
width: 250px;
}
button {
background-color: #4CAF50;
color: white;
padding: 10px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
margin-left: 10px;
}
button:hover {
background-color: #45a049;
}
.button-container {
text-align: center;
margin-bottom: 20px;
}
</style>
</head>
<body>
<h2>Data Barang</h2>
<div class="button-container">
<form action="<?php echo site_url('barang/search_barang'); ?>" method="post">
<input type="text" name="keyword" placeholder="Cari Nama Barang">
<button type="submit">Cari</button>
<button onclick="window.location.href='<?php echo base_url('barang'); ?>'" type="button">Reset</button>
</form>
</div>
<table>
<tr>
<th>ID</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Kategori Barang</th>
<th>Deskripsi Barang</th>
<th>Harga Beli</th>
<th>Harga Jual</th>
<th>Stok Barang</th>
<th>Supplier Barang</th>
<th>Tanggal Masuk</th>
</tr>
<?php foreach ($barang as $brg) { ?>
<tr>
<td><?php echo $brg['id']; ?></td>
<td><?php echo $brg['kode_barang']; ?></td>
<td><?php echo $brg['nama_barang']; ?></td>
<td><?php echo $brg['kategori_barang']; ?></td>
<td><?php echo $brg['deskripsi_barang']; ?></td>
<td><?php echo $brg['harga_beli']; ?></td>
<td><?php echo $brg['harga_jual']; ?></td>
<td><?php echo $brg['stok_barang']; ?></td>
<td><?php echo $brg['supplier_barang']; ?></td>
<td><?php echo $brg['tanggal_masuk']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
