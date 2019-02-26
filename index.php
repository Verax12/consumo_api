<!DOCTYPE html>
<html>
<body>
<?php
// Consumo da API

$url = "https://homologacao.defensoria.mg.def.br/assistidos/assisteds/";
$header = array(
    'token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJuYW1lIjoidmlzdWFsIiwiZW1haWwiOiJ2aXN1YWxAdmlzdWFsLmNvbSJ9.aLIXXMnQyZIZw6hTfGWGvxxAamx1D1uGN1lPjvBTu5M',
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);

$users = json_decode($result, true);
// $users = $users["users"];
print_r($users);

$header = [
    'alg' => 'HS256',
    'typ' => 'JWT',
];
$header = json_encode($header);
$header = base64_encode($header);

$payload = [
    'iss' => 'localhost',
    'name' => 'Diogo',
    'email' => 'diogo.fragabemfica@gmail.com',
];
$payload = json_encode($payload);
$payload = base64_encode($payload);

$signature = hash_hmac('sha256', "$header.$payload", 'minha-senha', true);
$signature = base64_encode($signature);
$token = "$header.$payload.$signature";

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h2>Basic HTML Table</h2>

<table style="width:50%" class="table table-striped">
  <tr>
    <th>Firstname</th>
    <th>Age</th>
    <th>Sexo</th>
  </tr>
  <?php
foreach ($users as $key => $user) {
    ?>
  <tr>
    <td>   <?=$user['nome']?></td>
    <td>   <?=$user['idade']?> </td>
    <td>  <?=$user['sexo']?> </td>
  </tr>
  <?php }?>
</table>

</body>
</html>
<?php
?>