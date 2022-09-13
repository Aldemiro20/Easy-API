<?php
include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

if(!empty($postjson['nome'])){
 $query_buscar = $pdo->query("SELECT * from tarefas where cliente='$postjson[nome]'  ORDER BY id DESC limit 1 ");
 
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);

 if(@count($dados_buscar)>0){
 
	//mostra os dados
   	for ($i = 0; $i < count($dados_buscar); $i++) {
   	foreach ($dados_buscar[$i] as $key => $value) {
   	}
  	$dados[] = array(
    
    'id' => $dados_buscar[$i]['id'],
    'data_tarefa' => $dados_buscar[$i]['data_tarefa'],
    'ini_tarefa' => $dados_buscar[$i]['ini_tarefa'],
    'fin_tarefa' => $dados_buscar[$i]['fin_tarefa'],
    'duracao' => $dados_buscar[$i]['duracao'],
    'tarefa' => $dados_buscar[$i]['tarefa'],
    'cliente' => $dados_buscar[$i]['cliente'],
    'notificar_cliente' => $dados_buscar[$i]['notificar_cliente'],
    'notificar_advogado' => $dados_buscar[$i]['notificar_advogado'],
    'obs_geral' => $dados_buscar[$i]['obs_geral'],
	  
  	);
	}

	$result = json_encode(array('mensagem'=>'tem', 'user'=>$dados));
	echo $result;

 }
 else{
 	 $result = json_encode(array('mensagem'=>'cliente não encontrado'));
 	 echo $result;
 	 
  }
}
/** */
//outro

else if (!empty($postjson['nome']) && !empty($postjson['data'])){
	$query_buscar = $pdo->query("SELECT * from tarefas where  data_tarefa='$postjson[data]' and cliente='$postjson[nome]' ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
	$dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
   
	if(@count($dados_buscar)>0){
	
	   //mostra os dados
		  for ($i = 0; $i < count($dados_buscar); $i++) {
		  foreach ($dados_buscar[$i] as $key => $value) {
		  }
		 $dados[] = array(
	'id' => $dados_buscar[$i]['id'],
    'data_tarefa' => $dados_buscar[$i]['data_tarefa'],
    'ini_tarefa' => $dados_buscar[$i]['ini_tarefa'],
    'fin_tarefa' => $dados_buscar[$i]['fin_tarefa'],
    'duracao' => $dados_buscar[$i]['duracao'],
    'tarefa' => $dados_buscar[$i]['tarefa'],
    'cliente' => $dados_buscar[$i]['cliente'],
    'notificar_cliente' => $dados_buscar[$i]['notificar_cliente'],
    'notificar_advogado' => $dados_buscar[$i]['notificar_advogado'],
    'obs_geral' => $dados_buscar[$i]['obs_geral'],
	  
		 );
	   }
   
	   $result = json_encode(array('mensagem'=>'tem', 'user'=>$dados));
	   echo $result;
   
	}
	else{
		 $result = json_encode(array('mensagem'=>'funcionario não encontrado'));
		 echo $result;
		 
	 }
   }

   //outro 

   //outro

else if (!empty($postjson['data'])){
	$query_buscar = $pdo->query("SELECT * from tarefas where  data_tarefa='$postjson[data]' ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
	$dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
   
	if(@count($dados_buscar)>0){
	
	   //mostra os dados
		  for ($i = 0; $i < count($dados_buscar); $i++) {
		  foreach ($dados_buscar[$i] as $key => $value) {
		  }
		 $dados[] = array(
	'id' => $dados_buscar[$i]['id'],
    'data_tarefa' => $dados_buscar[$i]['data_tarefa'],
    'ini_tarefa' => $dados_buscar[$i]['ini_tarefa'],
    'fin_tarefa' => $dados_buscar[$i]['fin_tarefa'],
    'duracao' => $dados_buscar[$i]['duracao'],
    'tarefa' => $dados_buscar[$i]['tarefa'],
    'cliente' => $dados_buscar[$i]['cliente'],
    'notificar_cliente' => $dados_buscar[$i]['notificar_cliente'],
    'notificar_advogado' => $dados_buscar[$i]['notificar_advogado'],
    'obs_geral' => $dados_buscar[$i]['obs_geral'],
		 );  
 }
   
	   $result = json_encode(array('mensagem'=>'tem', 'user'=>$dados));
	   echo $result;
   
	}
	else{
		 $result = json_encode(array('mensagem'=>'funcionario não encontrado'));
		 echo $result;
		 
	 }
   }

   
  //outro

else if (!empty($postjson['tarefa']) && !empty($postjson['data'])){
	$query_buscar = $pdo->query("SELECT * from tarefas where  tarefa='$postjson[tarefa]' and data_tarefa='$postjson[data]'  ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
	$dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
   
	if(@count($dados_buscar)>0){
	
	   //mostra os dados
		  for ($i = 0; $i < count($dados_buscar); $i++) {
		  foreach ($dados_buscar[$i] as $key => $value) {
		  }
		 $dados[] = array(
	'id' => $dados_buscar[$i]['id'],
    'data_tarefa' => $dados_buscar[$i]['data_tarefa'],
    'ini_tarefa' => $dados_buscar[$i]['ini_tarefa'],
    'fin_tarefa' => $dados_buscar[$i]['fin_tarefa'],
    'duracao' => $dados_buscar[$i]['duracao'],
    'tarefa' => $dados_buscar[$i]['tarefa'],
    'cliente' => $dados_buscar[$i]['cliente'],
    'notificar_cliente' => $dados_buscar[$i]['notificar_cliente'],
    'notificar_advogado' => $dados_buscar[$i]['notificar_advogado'],
    'obs_geral' => $dados_buscar[$i]['obs_geral'],
	  
		 );
	   }
   
	   $result = json_encode(array('mensagem'=>'tem', 'user'=>$dados));
	   echo $result;
   
	}

	 //outro

else if (!empty($postjson['tarefa'])){
	$query_buscar = $pdo->query("SELECT * from tarefas where  tarefa='$postjson[tarefa]'  ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
	$dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
   
	if(@count($dados_buscar)>0){
	
	   //mostra os dados
		  for ($i = 0; $i < count($dados_buscar); $i++) {
		  foreach ($dados_buscar[$i] as $key => $value) {
		  }
		 $dados[] = array(
	'id' => $dados_buscar[$i]['id'],
    'data_tarefa' => $dados_buscar[$i]['data_tarefa'],
    'ini_tarefa' => $dados_buscar[$i]['ini_tarefa'],
    'fin_tarefa' => $dados_buscar[$i]['fin_tarefa'],
    'duracao' => $dados_buscar[$i]['duracao'],
    'tarefa' => $dados_buscar[$i]['tarefa'],
    'cliente' => $dados_buscar[$i]['cliente'],
    'notificar_cliente' => $dados_buscar[$i]['notificar_cliente'],
    'notificar_advogado' => $dados_buscar[$i]['notificar_advogado'],
    'obs_geral' => $dados_buscar[$i]['obs_geral'],
	  
		 );
	   }
   
	   $result = json_encode(array('mensagem'=>'tem', 'user'=>$dados));
	   echo $result;
   
	}
}
	else{
		 $result = json_encode(array('mensagem'=>'funcionario não encontrado'));
		 echo $result;
		 
	 }
   }

 ?>
 
