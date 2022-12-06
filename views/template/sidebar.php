<?php

$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>

<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Sistem UKT</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main Menu
            </li>

            <li class="sidebar-item <?= ($activePage == 'index') ? 'active' : ''; ?>">
                <a class="sidebar-link" href="index.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($activePage == 'chart') ? 'active' : ''; ?>">
                <a class="sidebar-link" href="chart.php">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Chart</span>
                </a>
            </li>

            <li class="sidebar-item <?= ($activePage == 'mahasiswa') ? 'active' : ''; ?>">
                <a class="sidebar-link" href="mahasiswa.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Mahasiswa</span>
                </a>
            </li>

            <li class="sidebar-item <?= ($activePage == 'ukt') ? 'active' : ''; ?>">
                <a class="sidebar-link" href="ukt.php">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Pembayaran UKT</span>
                </a>
            </li>

            <li class="sidebar-header">
                Master Data
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Jurusan</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-blank.html">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Program Studi</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-cards.html">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Kelas</span>
                </a>
            </li>

            <li class="sidebar-header">
                Laporan
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Laporan Mahasiswa</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Laporan UKT</span>
                </a>
            </li>
        </ul>
    </div>
</nav>