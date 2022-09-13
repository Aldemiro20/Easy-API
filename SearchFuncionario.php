<?php
include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 $query_buscar = $pdo->query("SELECT * from funcionarios where nome='$postjson[pesquisa]'  ORDER BY id DESC limit 1 ");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);

 if(@count($dados_buscar)>0){
 
	//mostra os dados
   	for ($i = 0; $i < count($dados_buscar); $i++) {
   	foreach ($dados_buscar[$i] as $key => $value) {
   	}
  	$dados[] = array(
    
    'nome' => $dados_buscar[$i]['nome'],
    'id' => $dados_buscar[$i]['id'],
  	'funcao' => $dados_buscar[$i]['funcao'],
    'outra_funcao' => $dados_buscar[$i]['outra_funcao'],
    'oab' => $dados_buscar[$i]['oab'],
    'estado_oab' => $dados_buscar[$i]['estado_oab'],
    'rg' => $dados_buscar[$i]['rg'],
    'cpf' => $dados_buscar[$i]['cpf'],
    'endereco' => $dados_buscar[$i]['endereco'],
    'cidade' => $dados_buscar[$i]['cidade'],
    'nacionalidade' => $dados_buscar[$i]['nacionalidade'],
    'estado_civil' => $dados_buscar[$i]['estado_civil'],
    'data_nascimento' => $dados_buscar[$i]['data_nascimento'],
    'telefone_fixo' => $dados_buscar[$i]['telefone_fixo'],
    'telefone_celular' => $dados_buscar[$i]['telefone_celular'],
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
 
 