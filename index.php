<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Permohonan Skim Pinjaman Komputer Riba</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="header-title">Borang Permohonan Pinjaman Komputer Riba</h2>
        <form action="process.php" method="POST" class="form-main">
            
            <div class="form-group">
                <label>Nama Penuh:</label>
                <input type="text" name="nama" class="input-control">
            </div>

            <div class="form-group">
                <label>Nombor Matrik:</label>
                <input type="text" name="no_matrik" class="input-control">
            </div>

            <div class="form-group">
                <label>Semester:</label>
                <input type="number" name="semester" class="input-control">
            </div>

            <div class="form-group">
                <label>Tarikh Permohonan:</label>
                <input type="date" name="tarikh" class="input-control">
            </div>

            <div class="form-group">
                <label>Jabatan:</label>
                <select name="jabatan" class="select-control">
                    <option value="">-- Sila Pilih --</option>
                    <option value="JTMK">JTMK</option>
                    <option value="JKE">JKE</option>
                    <option value="JKM">JKM</option>
                </select>
            </div>

            <div class="form-group">
                <label>Spesifikasi Diperlukan:</label>
                <div class="radio-group">
                    <input type="radio" name="specs" value="Standard" class="radio-input"> Standard
                    <input type="radio" name="specs" value="High-End" class="radio-input"> High-End
                </div>
            </div>

            <div class="form-group">
                <label>Perisian Tambahan:</label>
                <div class="checkbox-group">
                    <input type="checkbox" name="software[]" value="Office" class="check-input"> MS Office
                    <input type="checkbox" name="software[]" value="Adobe" class="check-input"> Adobe Suite
                </div>
            </div>

            <div class="form-group">
                <label>Alasan Sokongan (Min 25 aksara):</label>
                <textarea name="alasan" class="textarea-control" rows="4"></textarea>
            </div>

            <div class="button-group">
                <button type="submit" class="btn-submit">Hantar</button>
                <button type="reset" class="btn-reset">Tetap Semula</button>
            </div>
        </form>
    </div>
</body>
</html>