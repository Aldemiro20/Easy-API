<?php

include_once('config.php');

$query = $pdo->query("SELECT * from clientes");

$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i++) {
  foreach ($res[$i] as $key => $value) {
  }
  $dados[] = array(
    'id' => $res[$i]['id'],
    'nome' => $res[$i]['nome'],
    'nome_contacto1' => $res[$i]['nome_contacto1'],
    'nome_contacto2' => $res[$i]['nome_contacto2'],
    'telefone_fixo' => $res[$i]['telefone_fixo'],
    'telefone_celular' => $res[$i]['telefone_celular'],
    'endereco' => $res[$i]['endereco'],
    'estado' => $res[$i]['estado'],
    'cidade' => $res[$i]['cidade'],
    'email' => $res[$i]['email'],
    'data_entrada' => $res[$i]['data_entrada'],
    'advogado' => $res[$i]['advogado'],
   
  );
}

if (count($res) > 0) {
  $result = json_encode(array('success'=>true, 'usuarios'=>$dados));
} else {
  $result = json_encode(array('success'=>false, 'usuarios'=>'0'));
}

echo $result;

?>