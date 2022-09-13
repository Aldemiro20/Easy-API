<?php
include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 $query_buscar = $pdo->query("SELECT * from processos where nome_cliente='$postjson[pesquisa]'  ORDER BY id DESC limit 1 ");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);

 if(@count($dados_buscar)>0){
 
	//mostra os dados
   	for ($i = 0; $i < count($dados_buscar); $i++) {
   	foreach ($dados_buscar[$i] as $key => $value) {
   	}
  	$dados[] = array(
    
    'nome_cliente' => $dados_buscar[$i]['nome_cliente'],
    'id' => $dados_buscar[$i]['id'],
	  'n_processo' => $dados_buscar[$i]['n_processo'],
    'autor' => $dados_buscar[$i]['autor'],
    'data_ingresso' => $dados_buscar[$i]['data_ingresso'],
    'forum' => $dados_buscar[$i]['forum'],
    'comarca' => $dados_buscar[$i]['comarca'],
    'p_cliente' => $dados_buscar[$i]['p_cliente'],
    'op_cliente' => $dados_buscar[$i]['op_cliente'],
    'status' => $dados_buscar[$i]['status'],
    'o_status' => $dados_buscar[$i]['o_status'],
    'accao' => $dados_buscar[$i]['accao'],
    'o_accao' => $dados_buscar[$i]['o_accao'],
    'rito' => $dados_buscar[$i]['rito'],
    'o_rito' => $dados_buscar[$i]['o_rito'],
    'v_causa' => $dados_buscar[$i]['v_causa'],
    'c_nome' => $dados_buscar[$i]['c_nome'],
    'c_telefone_fixo' => $dados_buscar[$i]['c_telefone_fixo'],
    'c_telefone_celular' => $dados_buscar[$i]['c_telefone_celular'],
    'c_email' => $dados_buscar[$i]['c_email'],
  	);
	}

	$result = json_encode(array('mensagem'=>'tem', 'user'=>$dados));
	echo $result;

 }
 else{
 	 $result = json_encode(array('mensagem'=>'funcionario não encontrado'));
 	 echo $result;
 	 
  }

 ?>
 
 