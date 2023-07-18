<!DOCTYPE html>
<html>

<head>
    <title>Tambah Siswa Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    require "koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah_asal = $_POST['sekolah_asal'];

        $query = "INSERT INTO siswa (nama, nim, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama','$nim', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
        $result = mysqli_query($koneksi, $query);
        if ($result) {
            echo "
		    <script>
			        alert('data berhasil ditambahkan!');
			        document.location.href = 'index.php';
		        </script>
	            ";
        } else {
            echo "
		    <script>
			        alert('data gagal ditambahkan!');
			        document.location.href = 'index.php';
		        </script>
	            ";
        }
    }
    ?>
    <div class="container mt-5 w-50">
        <h2 class="text-center">Tambah Siswa Baru</h2>
        <form method="post" action="tambah.php">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nim:</label>
                <input type="text" name="nim" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input" required>
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input" required>
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label>Agama:</label>
                <select name="agama" class="form-control" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-sm btn-outline-primary">Tambah</button>
            <a href="index.php" class="btn btn-sm btn-outline-secondary">Batal</a>
        </form>
    </div>
</body>

</html>