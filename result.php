<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Keputusan Permohonan</title>
    <link rel="stylesheet" href="style.css?v=2">
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
                <strong><?php echo $_SESSION['success']; ?></strong>
            </div>
            
            <table class="result-table">
                <tr>
                    <th>Nama Penuh</th>
                    <td><?php echo $_SESSION['nama']; ?></td>
                </tr>
                <tr>
                    <th>No. Matrik</th>
                    <td><?php echo $_SESSION['no_matrik']; ?></td>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td><?php echo $_SESSION['semester']; ?></td>
                </tr>
                <tr>
                    <th>Tarikh Permohonan</th>
                    <td><?php echo $_SESSION['tarikh']; ?></td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td><?php echo $_SESSION['jabatan']; ?></td>
                </tr>
                <tr>
                    <th>Spesifikasi</th>
                    <td><?php echo $_SESSION['specs']; ?></td>
                </tr>
                <tr>
                    <th>Pengesahan Syarat</th>
                    <td><?php echo $_SESSION['pengesahan'] == 'Ya' ? 'Disahkan' : 'Tidak Disahkan'; ?></td>
                </tr>
                <tr>
                    <th>Alasan Sokongan</th>
                    <td><?php echo nl2br($_SESSION['alasan']); ?></td>
                </tr>
            </table>
        <?php endif; ?>

        <div class="nav-link">
            <a href="index.php" class="link-back">Kembali ke Borang Permohonan</a>
        </div>
    </div>
</body>
</html>