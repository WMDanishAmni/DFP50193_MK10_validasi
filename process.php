<?php
session_start();

// Fetch data and save it straight into the SESSION
$_SESSION['nama'] = trim($_POST['nama'] ?? '');
$_SESSION['no_matrik'] = trim($_POST['no_matrik'] ?? '');
$_SESSION['semester'] = trim($_POST['semester'] ?? '');
$_SESSION['tarikh'] = trim($_POST['tarikh'] ?? '');
$_SESSION['jabatan'] = trim($_POST['jabatan'] ?? '');
$_SESSION['specs'] = trim($_POST['specs'] ?? '');
$_SESSION['pengesahan'] = trim($_POST['pengesahan'] ?? '');
$_SESSION['alasan'] = trim($_POST['alasan'] ?? '');

// Clear old errors/success messages before a new check
unset($_SESSION['error']);
unset($_SESSION['success']);

// VALIDATION logic chain
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $_SESSION['error'] = "Sila hantar borang dahulu.";

} elseif ($_SESSION['nama'] == '') {
    $_SESSION['error'] = "Nama Penuh tidak diisi.";

} elseif ($_SESSION['no_matrik'] == '') {
    $_SESSION['error'] = "Nombor Matrik tidak diisi.";

} elseif ($_SESSION['semester'] == '') {
    $_SESSION['error'] = "Semester tidak diisi.";

} elseif ($_SESSION['tarikh'] == '') {
    $_SESSION['error'] = "Tarikh Permohonan tidak dipilih.";

} elseif ($_SESSION['jabatan'] == '') {
    $_SESSION['error'] = "Jabatan tidak dipilih.";

} elseif ($_SESSION['specs'] == '') {
    $_SESSION['error'] = "Sila pilih Spesifikasi Diperlukan.";

} elseif ($_SESSION['pengesahan'] == '') {
    $_SESSION['error'] = "Sila tandakan kotak pengesahan syarat.";

} elseif ($_SESSION['alasan'] == '') {
    $_SESSION['error'] = "Alasan Sokongan tidak diisi.";

} elseif (strlen($_SESSION['alasan']) < 25) {
    $_SESSION['error'] = "Alasan permohonan mestilah sekurang-kurangnya 25 aksara.";

} else {
    $_SESSION['success'] = "Permohonan Berjaya Disemak & Diterima!";
}

// Redirect to the result page
header("Location: result.php");
exit();
?>