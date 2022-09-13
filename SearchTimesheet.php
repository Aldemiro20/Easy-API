<?php
include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 $query_buscar = $pdo->query("SELECT * from clientes where nome='$postjson[pesquisa]'  ORDER BY id DESC limit 1 ");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
 $dados_buscar2 = $query_buscar->fetch(PDO::FETCH_ASSOC);

 $query = $pdo->query("SELECT nome from clientes WHERE nome= '$postjson[pesquisa]'");
 $query->execute();
 $linha=$query->fetch(PDO::FETCH_ASSOC);
 $r_id=$linha['nome'];
 $nome=$r_id;
 
 if(@count($dados_buscar)>0){
  $nome_cliente=$dados_buscar2['nome'];

 if($nome!=""){
  $query = $pdo->query("SELECT * from compromissos WHERE cliente= '$nome'");
  $dadoss=$query->fetchAll(PDO::FETCH_ASSOC);

//para fazer o calculo da soma
  $query2 = $pdo->query("SELECT * from compromissos WHERE cliente= '$nome'");
  $dadoss2=$query2->fetchAll(PDO::FETCH_ASSOC);
  
  $soma=0;
  for ($i = 0; $i < count($dadoss2); $i++) {
   $soma+=$dadoss2[$i]['duracao'];
  };
  //mostra os dados da tabela cliente
  for ($i = 0; $i < count($dados_buscar); $i++) {
    foreach ($dados_buscar[$i] as $key => $value) {
    }
   $dados[] = array(
   'nome' => $dados_buscar[$i]['nome'],
   'id' => $dados_buscar[$i]['id'],
   );
  };

 
 //mostra os dados da tabela compromisso relacionado a esse cliente
  
  for ($i = 0; $i < count($dadoss); $i++) {
  foreach ($dadoss[$i] as $key => $value) {
  }
  
 $dados2[] = array(
    'id' => $dadoss[$i]['id'],
    'data_compromisso' => $dadoss[$i]['data_compromisso'],
    'ini_compromisso' => $dadoss[$i]['ini_compromisso'],
    'fin_compromisso' => $dadoss[$i]['fin_compromisso'],
    'duracao' => $dadoss[$i]['duracao'],
    'compromisso' => $dadoss[$i]['compromisso'],
    'tipo_comp' => $dadoss[$i]['tipo_comp'],
    'cliente' => $dadoss[$i]['cliente'],
    'notificar_cliente' => $dadoss[$i]['notificar_cliente'],
    'notificar_advogado' => $dadoss[$i]['notificar_advogado'],
    'obs_geral' => $dadoss[$i]['obs_geral'],
    
   
 );


}
$result = json_encode(array('mensagem'=>'tem', 'cliente'=>$dados, 'compromisso'=>$dados2,'soma'=>$soma));
echo $result;
 }
 

	//mostra os dados
   	for ($i = 0; $i < count($dados_buscar); $i++) {
   	foreach ($dados_buscar[$i] as $key => $value) {
   	}
  	$dados[] = array(
    'nome' => $dados_buscar[$i]['nome'],
    'id' => $dados_buscar[$i]['id'],
    
  	);
	}

	//$result = json_encode(array('mensagem'=>'tem', 'cliente'=>$dados));
	//echo $result;

 }
 else{
 	 $result = json_encode(array('mensagem'=>'Cliente não encontrado'));
 	 echo $result;
 	 
  }

 ?>
 
 