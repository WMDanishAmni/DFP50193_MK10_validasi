<?php
session_start();

// Ambil data dan simpan terus ke SESSION
$_SESSION['nama'] = trim($_POST['nama'] ?? '');
$_SESSION['no_matrik'] = trim($_POST['no_matrik'] ?? '');
$_SESSION['semester'] = trim($_POST['semester'] ?? '');
$_SESSION['tarikh'] = trim($_POST['tarikh'] ?? '');
$_SESSION['jabatan'] = trim($_POST['jabatan'] ?? '');
$_SESSION['specs'] = trim($_POST['specs'] ?? '');
$_SESSION['alasan'] = trim($_POST['alasan'] ?? '');

// Buang session ralat/berjaya yang lama sebelum semakan baru
unset($_SESSION['error']);
unset($_SESSION['success']);

// Pengesahan Logik (Validation)
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $_SESSION['error'] = "Sila hantar borang terlebih dahulu.";

} elseif ($_SESSION['nama'] == '') {
    $_SESSION['error'] = "Nama Penuh tidak diisi.";

} elseif ($_SESSION['no_matrik'] == '') {
    $_SESSION['error'] = "Nombor Matrik tidak diisi.";

} elseif ($_SESSION['semester'] == '') {
    $_SESSION['error'] = "Semester tidak diisi.";

} elseif ($_SESSION['tarikh'] == '') {
    $_SESSION['error'] = "Tarikh Permohonan tidak diisi.";

} elseif ($_SESSION['jabatan'] == '') {
    $_SESSION['error'] = "Jabatan tidak dipilih.";

} elseif ($_SESSION['specs'] == '') {
    $_SESSION['error'] = "Sila pilih spesifikasi peranti.";

} elseif ($_SESSION['alasan'] == '') {
    $_SESSION['error'] = "Alasan Sokongan tidak diisi.";

} elseif (strlen($_SESSION['alasan']) < 25) {
    $_SESSION['error'] = "Alasan permohonan mestilah sekurang-kurangnya 25 aksara.";

} else {
    $_SESSION['success'] = "Permohonan Berjaya Diterima!";
}

// Terus bawa pengguna ke halaman result
header("Location: result.php");
exit();
?>