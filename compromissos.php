<?php

include_once('config.php');

$query = $pdo->query("SELECT * from compromissos");

$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i++) {
  foreach ($res[$i] as $key => $value) {
  }
 
  $dados[] = array(
    'id' => $res[$i]['id'],
    'data_compromisso' => $res[$i]['data_compromisso'],
    'ini_compromisso' => $res[$i]['ini_compromisso'],
    'fin_compromisso' => $res[$i]['fin_compromisso'],
    'duracao' => $res[$i]['duracao'],
    'compromisso' => $res[$i]['compromisso'],
    'tipo_comp' => $res[$i]['tipo_comp'],
    'cliente' => $res[$i]['cliente'],
    'notificar_cliente' => $res[$i]['notificar_cliente'],
    'notificar_advogado' => $res[$i]['notificar_advogado'],
    'obs_geral' => $res[$i]['obs_geral'],
    
   
  );
}

if (count($res) > 0) {
  $result = json_encode(array('success'=>true, 'usuarios'=>$dados));
} else {
  $result = json_encode(array('success'=>false, 'usuarios'=>'0'));
}

echo $result;

?>