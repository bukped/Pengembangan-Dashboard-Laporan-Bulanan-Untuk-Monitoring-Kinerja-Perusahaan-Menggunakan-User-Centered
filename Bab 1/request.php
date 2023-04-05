<?php
// aktifkan CORS (Cross-Origin Resource Sharing)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// definisi endpoint untuk web service
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  // tampilkan pesan "Hello World"
  echo "Hello World";
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // terima data dari client dan tampilkan kembali
  $data = json_decode(file_get_contents("php://input"), true);
  echo json_encode($data);
} else {
  // tampilkan pesan error
  http_response_code(405);
  echo "Method Not Allowed";
}
?>
