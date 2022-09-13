<?php

include_once('config.php');

$query = $pdo->query("SELECT * from tarefas");

$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i++) {
  foreach ($res[$i] as $key => $value) {
  }
 
  $dados[] = array(
    'id' => $res[$i]['id'],
    'data_tarefa' => $res[$i]['data_tarefa'],
    'ini_tarefa' => $res[$i]['ini_tarefa'],
    'fin_tarefa' => $res[$i]['fin_tarefa'],
    'duracao' => $res[$i]['duracao'],
    'tarefa' => $res[$i]['tarefa'],
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