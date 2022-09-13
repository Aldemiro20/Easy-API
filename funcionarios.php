<?php

include_once('config.php');

$query = $pdo->query("SELECT * from funcionarios");

$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i++) {
  foreach ($res[$i] as $key => $value) {
  }
  
  $dados[] = array(
    'id' => $res[$i]['id'],
    'nome' => $res[$i]['nome'],
    'funcao' => $res[$i]['funcao'],
    'outra_funcao' => $res[$i]['outra_funcao'],
    'oab' => $res[$i]['oab'],
    'estado_oab' => $res[$i]['estado_oab'],
    'rg' => $res[$i]['rg'],
    'cpf' => $res[$i]['cpf'],
    'endereco' => $res[$i]['endereco'],
    'cidade' => $res[$i]['cidade'],
    'nacionalidade' => $res[$i]['nacionalidade'],
    'estado_civil' => $res[$i]['estado_civil'],
    'data_nascimento' => $res[$i]['data_nascimento'],
    'telefone_fixo' => $res[$i]['telefone_fixo'],
    'telefone_celular' => $res[$i]['telefone_celular'],
    'f_usuario' => $res[$i]['f_usuario'],
    'f_senha' => $res[$i]['f_senha'],
    'f_compromissos' => $res[$i]['f_compromissos'],
    'f_processos' => $res[$i]['f_processos'],
    'f_financeiro' => $res[$i]['f_financeiro'],
    'f_tarefas' => $res[$i]['f_tarefas'],
    'f_equipe' => $res[$i]['f_equipe'],
    'f_cobranca' => $res[$i]['f_cobranca'],
    'f_clientes' => $res[$i]['f_clientes'],
    'f_agendas' => $res[$i]['f_agendas'],
    'f_encaminhamento' => $res[$i]['f_encaminhamento'],
   
  );
}

if (count($res) > 0) {
  $result = json_encode(array('success'=>true, 'usuarios'=>$dados));
} else {
  $result = json_encode(array('success'=>false, 'usuarios'=>$dados));
}

echo $result;

?>