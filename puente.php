<?php
// Validar que se reciba un archivo y que pertenezca al dominio permitido
if (!isset($_GET['file']) || strpos($_GET['file'], 'michoacan.gob.mx') === false) {
    die("Acceso no permitido");
}

$url = $_GET['file'];

// Configurar cURL para descargar el recurso ignorando el certificado SSL vencido
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');

$data = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
curl_close($ch);

if ($http_code == 200 && $data) {
    // Le decimos al navegador qué tipo de archivo es (imagen, css, svg, etc.)
    header("Content-Type: " . $content_type);
    echo $data;
} else {
    http_response_code(404);
    echo "No se pudo recuperar el recurso externo.";
}