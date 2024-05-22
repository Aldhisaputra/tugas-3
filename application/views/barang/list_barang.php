<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            padding-top: 20px; /* to accommodate */
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: #555;
            margin: auto;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            font-weight: 500;
            color: #555;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-weight: bold;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: none;
            padding: 20px;
            text-align: left;
            font-size: 18px;
            color: #333;
            font-weight: 400;
        }

        th {
            background-color: #fafafa;
            font-weight: 500;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        input[type="text"] {
            padding: 15px;
            margin-bottom: 20px;
            border: none;
            border-radius: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            font-size: 16px;
            color: #555;
        }

        .btn-primary,
        .btn-secondary {
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 18px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            color: #fff;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #495057;
        }
    </style>
</head>

<body>
    <h2>Data Barang</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="<?php echo site_url('barang/search_barang'); ?>" method="post" class="d-flex justify-content-center">
                    <input type="text" name="keyword" placeholder="Cari Nama Barang" class="form-control me-2">
                    <button type="submit" class="btn btn-primary">Cari</button>
                    <button onclick="window.location.href='<?php echo base_url('barang'); ?>'" type="button"
                        class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
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
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
