<?php
$url = "https://homologacao.defensoria.mg.def.br/assistidos/assisteds/edit/";
$data = $_POST;
json_encode($data);
$header = array(
    'token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJuYW1lIjoidmlzdWFsIiwiZW1haWwiOiJ2aXN1YWxAdmlzdWFsLmNvbSJ9.aLIXXMnQyZIZw6hTfGWGvxxAamx1D1uGN1lPjvBTu5M',
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
