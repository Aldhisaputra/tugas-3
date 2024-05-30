<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="icon" href="<?php echo site_url('assets/foto.jpg'); ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?= $active_menu == 'home' ? 'active' : ''; ?>" href="<?= site_url('beranda') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $active_menu == 'data_barang' ? 'active' : ''; ?>" href="<?= site_url('barang/data_barang') ?>">Data Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $active_menu == 'tentang' ? 'active' : ''; ?>" href="<?= site_url('tentang') ?>">Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 mb-5">
    <?php echo $content; ?>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-2">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img class="rounded-circle" src="<?php echo site_url('assets/foto.jpg'); ?>" width="50" height="50">
            </a>
            <span class="text-muted">©2024 Praktikum TIF, <b>Aldhi Saputra</b> | 1412220075</span>
        </div>
    </footer>
</div>

<style>
    .foto {
        width: auto;
        height: 50px;
    }
</style>
<script src="<?= base_url('assets/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
