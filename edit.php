<!DOCTYPE html>
<html>

<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    include "koneksi.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM siswa WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah_asal = $_POST['sekolah_asal'];

        $query = "UPDATE siswa SET nama = '$nama',nim = '$nim', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', agama = '$agama', sekolah_asal = '$sekolah_asal' WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "
		    <script>
			        alert('data berhasil diedit!');
			        document.location.href = 'index.php';
		        </script>
	            ";
        } else {
            echo "
		    <script>
			        alert('data gagal diedit!');
			        document.location.href = 'index.php';
		        </script>
	            ";
        }
    }
    ?>


    <div class="container mt-5 w-50">
        <h2 class="text-center">Formulir Edit Data Siswa</h2>
        <form method="post" action="edit.php">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label>Nim:</label>
                <input type="text" name="nim" class="form-control" value="<?php echo $data['nim']; ?>" required>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" class="form-control" required><?php echo $data['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input" <?php echo ($data['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?> required>
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input" <?php echo ($data['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?> required>
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label>Agama:</label>
                <select name="agama" class="form-control" required>
                    <option value="Islam" <?php echo ($data['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                    <option value="Kristen" <?php echo ($data['agama'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                    <option value="Hindu" <?php echo ($data['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                    <option value="Budha" <?php echo ($data['agama'] == 'Budha') ? 'selected' : ''; ?>>Budha</option>
                </select>
            </div>
            <div class="form-group">
                <label>Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" class="form-control" value="<?php echo $data['sekolah_asal']; ?>" required>
            </div>
            <button type="submit" class="btn btn-sm btn-outline-warning ">Simpan</button>
            <a href="index.php" class="btn btn-sm btn-outline-secondary">Batal</a>
        </form>
    </div>
</body>

</html>