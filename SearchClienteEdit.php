<?php 
include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 $query_buscar = $pdo->query("SELECT * from clientes where nome='$postjson[pesquisa]' ORDER BY id DESC limit 1 ");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);

 if(@count($dados_buscar)>0){
 
	//mostra os dados
   	for ($i = 0; $i < count($dados_buscar); $i++) {
   	foreach ($dados_buscar[$i] as $key => $value) {
   	}
  	$dados[] = array(
    
    'nome' => $dados_buscar[$i]['nome'],
    'id' => $dados_buscar[$i]['id'],
	  'telefone_fixo' => $dados_buscar[$i]['telefone_fixo'],
    'telefone_celular' => $dados_buscar[$i]['telefone_celular'],
    'endereco' => $dados_buscar[$i]['endereco'],
    'estado' => $dados_buscar[$i]['estado'],
    'cidade' => $dados_buscar[$i]['cidade'],
    'email' => $dados_buscar[$i]['email'],
    'data_entrada' => $dados_buscar[$i]['data_entrada'],
    'advogado' => $dados_buscar[$i]['advogado'],
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
 
 