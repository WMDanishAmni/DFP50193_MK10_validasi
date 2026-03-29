<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Keputusan Permohonan</title>
    <link rel="stylesheet" href="style.css?v=1">
</head>
<body>
    <div class="container">
        <h2 class="header-title">Keputusan Permohonan</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="error-msg">
                <strong>Ralat:</strong> <?php echo $_SESSION['error']; ?>
            </div>

        <?php elseif (isset($_SESSION['success'])): ?>
            <div class="success-msg">
                <strong><?php echo $_SESSION['success']; ?></strong><br><br>
                
                <b>Nama Penuh:</b> <?php echo $_SESSION['nama']; ?><br>
                <b>No. Matrik:</b> <?php echo $_SESSION['no_matrik']; ?><br>
                <b>Semester:</b> <?php echo $_SESSION['semester']; ?><br>
                <b>Tarikh:</b> <?php echo $_SESSION['tarikh']; ?><br>
                <b>Jabatan:</b> <?php echo $_SESSION['jabatan']; ?><br>
                <b>Spesifikasi:</b> <?php echo $_SESSION['specs']; ?><br>
                <b>Pengesahan:</b> <?php echo $_SESSION['pengesahan'] == 'Ya' ? 'Disahkan' : 'Tidak Disahkan'; ?><br>
                <b>Alasan:</b> <?php echo $_SESSION['alasan']; ?><br>
            </div>
        <?php endif; ?>

        <div class="nav-link">
            <a href="index.php" class="link-back">Kembali ke Borang Permohonan</a>
        </div>
    </div>
</body>
</html>