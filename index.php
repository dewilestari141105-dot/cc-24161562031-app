<?php
const PEMILIK = "24161562031 - Dewi Lestari";
const VERSI = "1.1";

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '/healthz') {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'ok']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Aplikasi Buku Tamu</h1>
    <p>Pemilik: <?= PEMILIK ?></p>
    <p>Versi: <?= VERSI ?></p>
</body>
</html>