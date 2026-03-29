<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Permohonan Skim Pinjaman Komputer Riba</title>
    <link rel="stylesheet" href="style.css?v=1">
</head>
<body>
    <div class="container">
        <h2 class="header-title">Permohonan Skim Pinjaman Komputer Riba</h2>
        <form action="process.php" method="POST" class="form-main">
            
            <div class="form-group">
                <label class="form-label">Nama Penuh:</label>
                <input type="text" name="nama" class="input-control">
            </div>

            <div class="form-group">
                <label class="form-label">Nombor Matrik:</label>
                <input type="text" name="no_matrik" class="input-control">
            </div>

            <div class="form-group">
                <label class="form-label">Semester:</label>
                <input type="number" name="semester" class="input-control">
            </div>

            <div class="form-group">
                <label class="form-label">Tarikh Permohonan:</label>
                <input type="date" name="tarikh" class="input-control">
            </div>

            <div class="form-group">
                <label class="form-label">Jabatan:</label>
                <select name="jabatan" class="select-control">
                    <option value="">-- Sila Pilih --</option>
                    <option value="JTMK">JTMK</option>
                    <option value="JKE">JKE</option>
                    <option value="JKM">JKM</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Spesifikasi Diperlukan:</label>
                <div class="radio-group">
                    <input type="radio" name="specs" value="Standard" class="radio-input"> Standard
                    <input type="radio" name="specs" value="High-End" class="radio-input"> High-End
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Pengesahan Syarat:</label>
                <div class="checkbox-group">
                    <input type="checkbox" name="pengesahan" value="Ya" class="check-input"> Saya mengesahkan maklumat ini benar.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Alasan Sokongan (Min 25 aksara):</label>
                <textarea name="alasan" class="textarea-control" rows="4"></textarea>
            </div>

            <div class="button-group">
                <button type="submit" class="btn-submit">Hantar Permohonan</button>
                <button type="reset" class="btn-reset">Tetap Semula</button>
            </div>
        </form>
    </div>
</body>
</html>