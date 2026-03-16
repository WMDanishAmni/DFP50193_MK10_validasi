<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Status Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="header-title">Keputusan Pemprosesan</h2>
        <div class="result-box">
            <?php
            if (isset($_POST['submit'])) {
                // (b) Menetapkan input kepada pemboleh ubah
                $nama = $_POST['nama'];
                $no_matrik = $_POST['no_matrik'];
                $semester = $_POST['semester'];
                $tarikh = $_POST['tarikh'];
                $jabatan = $_POST['jabatan'];
                $specs = isset($_POST['specs']) ? $_POST['specs'] : "";
                $alasan = $_POST['alasan'];

                $errors = [];

                // Validasi input kosong
                if (empty($nama)) $errors[] = "Nama tidak boleh kosong.";
                if (empty($no_matrik)) $errors[] = "Nombor Matrik tidak boleh kosong.";
                if (empty($semester)) $errors[] = "Semester tidak boleh kosong.";
                if (empty($tarikh)) $errors[] = "Tarikh tidak boleh kosong.";
                if (empty($jabatan)) $errors[] = "Sila pilih jabatan.";
                if (empty($specs)) $errors[] = "Sila pilih spesifikasi peranti.";

                // Validasi panjang alasan (min 25 aksara)
                if (strlen($alasan) < 25) {
                    $errors[] = "Alasan permohonan mestilah sekurang-kurangnya 25 aksara.";
                }

                // Paparan Mesej
                if (!empty($errors)) {
                    echo "<div class='error-msg'>";
                    foreach ($errors as $error) {
                        echo "<p>• $error</p>";
                    }
                    echo "</div>";
                } else {
                    echo "<div class='success-msg'>";
                    echo "<p>Permohonan berjaya diterima untuk <strong>$nama</strong> ($no_matrik).</p>";
                    echo "</div>";
                }
            }
            ?>
        </div>
        
        <div class="nav-link">
            <a href="index.php" class="link-back">Kembali ke Borang Permohonan</a>
        </div>
    </div>
</body>
</html>