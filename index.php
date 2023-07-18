<!DOCTYPE html>
<html>

<head>
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Pendaftaran Mahasiswa POLITEKNIK JAMBI</h2>
        <div style="display:flex;align-items:center;justify-content:center" class="mb-3">
            <img src="logo.png" alt="logo" style="width:10%;">
        </div>
        <a href="tambah.php" class="btn btn-primary mb-3">
            <li data-feather="plus"></li>Tambah Siswa
        </a>
        <form action="index.php" method="get" class="form-inline">
            <div class="row justify-content-end">
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Cari siswa... " autocomplete="off">
                </div>
                <div class="col-md-1 mb-3">
                    <button type="submit" class="btn btn-success btn-block">Search</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";

                $search = '';
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                }

                // Konfigurasi halaman dan jumlah data per halaman
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $dataPerHalaman = 4;
                $mulai = ($halaman > 1) ? ($halaman * $dataPerHalaman) - $dataPerHalaman : 0;

                // Query untuk mengambil total data siswa
                $queryJumlahData = "SELECT COUNT(*) as total FROM siswa WHERE nama LIKE '%$search%' OR nim LIKE '%$search%'  OR alamat LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR agama LIKE '%$search%' OR sekolah_asal LIKE '%$search%' order by nim asc";
                $resultJumlahData = mysqli_query($koneksi, $queryJumlahData);
                $totalData = mysqli_fetch_assoc($resultJumlahData)['total'];

                // Query untuk mengambil data siswa per halaman
                $queryDataSiswa = "SELECT * FROM siswa WHERE nama LIKE '%$search%' OR nim LIKE '%$search%' OR alamat LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR agama LIKE '%$search%' OR sekolah_asal LIKE '%$search%' order by nim asc LIMIT $mulai, $dataPerHalaman";
                $DataSiswa = mysqli_query($koneksi, $queryDataSiswa);
                $no = $mulai + 1;
                while ($data = mysqli_fetch_assoc($DataSiswa)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['nim'] . "</td>";
                    echo "<td>" . $data['alamat'] . "</td>";
                    echo "<td>" . $data['jenis_kelamin'] . "</td>";
                    echo "<td>" . $data['agama'] . "</td>";
                    echo "<td>" . $data['sekolah_asal'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $data['id'] . "' class='btn btn-sm btn-warning'> <li data-feather='edit'></li>Edit</a> ";
                    echo "<a href='hapus.php?id=" . $data['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data siswa ini?\")' class='btn btn-sm btn-danger'> <li data-feather='trash'></li>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>

        <!-- Tampilkan pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php
                $jumlahHalaman = ceil($totalData / $dataPerHalaman);
                for ($i = 1; $i <= $jumlahHalaman; $i++) :
                ?>
                    <li class="page-item <?php echo ($i == $halaman) ? 'active' : ''; ?>"><a class="page-link" href="?halaman=<?php echo $i; ?>&search=<?php echo $search; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>

    <script>
        feather.replace()
    </script>
</body>

</html>