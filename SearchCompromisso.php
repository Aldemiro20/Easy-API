<?php
include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);


if (!empty($postjson['nome']) && !empty($postjson['data'])){
	$query_buscar = $pdo->query("SELECT * from compromissos where data_compromisso='$postjson[data]' and cliente='$postjson[nome]' ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
	$dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
   
	if(@count($dados_buscar)>0){
	
	   //mostra os dados
		  for ($i = 0; $i < count($dados_buscar); $i++) {
		  foreach ($dados_buscar[$i] as $key => $value) {
		  }
		 $dados[] = array(
			'id' => $dados_buscar[$i]['id'],
			'data_compromisso' => $dados_buscar[$i]['data_compromisso'],
			'ini_compromisso' => $dados_buscar[$i]['ini_compromisso'],
			'fin_compromisso' => $dados_buscar[$i]['fin_compromisso'],
			'duracao' => $dados_buscar[$i]['duracao'],
			'compromisso' => $dados_buscar[$i]['compromisso'],
			'tipo_comp' => $dados_buscar[$i]['tipo_comp'],
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

 else if (!empty($postjson['compromisso'])){
	$query_buscar = $pdo->query("SELECT * from compromissos where  compromisso='$postjson[compromisso]'  ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
	$dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
   
	if(@count($dados_buscar)>0){
	
	   //mostra os dados
		  for ($i = 0; $i < count($dados_buscar); $i++) {
		  foreach ($dados_buscar[$i] as $key => $value) {
		  }
		 $dados[] = array(
			'id' => $dados_buscar[$i]['id'],
			'data_compromisso' => $dados_buscar[$i]['data_compromisso'],
			'ini_compromisso' => $dados_buscar[$i]['ini_compromisso'],
			'fin_compromisso' => $dados_buscar[$i]['fin_compromisso'],
			'duracao' => $dados_buscar[$i]['duracao'],
			'compromisso' => $dados_buscar[$i]['compromisso'],
			'tipo_comp' => $dados_buscar[$i]['tipo_comp'],
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

else if(!empty($postjson['nome'])){
 $query_buscar = $pdo->query("SELECT * from compromissos where cliente='$postjson[nome]' ORDER BY id DESC limit 1 ");
 
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);

 if(@count($dados_buscar)>0){
 
	//mostra os dados
   	for ($i = 0; $i < count($dados_buscar); $i++) {
   	foreach ($dados_buscar[$i] as $key => $value) {
   	}
  	$dados[] = array(
    
     'id' => $dados_buscar[$i]['id'],
    'data_compromisso' => $dados_buscar[$i]['data_compromisso'],
    'ini_compromisso' => $dados_buscar[$i]['ini_compromisso'],
    'fin_compromisso' => $dados_buscar[$i]['fin_compromisso'],
    'duracao' => $dados_buscar[$i]['duracao'],
    'compromisso' => $dados_buscar[$i]['compromisso'],
    'tipo_comp' => $dados_buscar[$i]['tipo_comp'],
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



   //outro

else if (!empty($postjson['data'])){
	$query_buscar = $pdo->query("SELECT * from compromissos where  data_compromisso='$postjson[data]' ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
	$dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
   
	if(@count($dados_buscar)>0){
	
	   //mostra os dados
		  for ($i = 0; $i < count($dados_buscar); $i++) {
		  foreach ($dados_buscar[$i] as $key => $value) {
		  }
		 $dados[] = array(
			'id' => $dados_buscar[$i]['id'],
			'data_compromisso' => $dados_buscar[$i]['data_compromisso'],
			'ini_compromisso' => $dados_buscar[$i]['ini_compromisso'],
			'fin_compromisso' => $dados_buscar[$i]['fin_compromisso'],
			'duracao' => $dados_buscar[$i]['duracao'],
			'compromisso' => $dados_buscar[$i]['compromisso'],
			'tipo_comp' => $dados_buscar[$i]['tipo_comp'],
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
		 $result = json_encode(array('mensagem'=>'compromisso não encontrado'));
		 echo $result;
		 
	 }
   }

   
  //outro
  else if (!empty($postjson['compromisso']) && !empty($postjson['data'])){
	$query_buscar = $pdo->query("SELECT * from compromissos where  compromisso='$postjson[compromisso]' and data_compromisso='$postjson[data]'  ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
	$dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
   
	if(@count($dados_buscar)>0){
	
	   //mostra os dados
		  for ($i = 0; $i < count($dados_buscar); $i++) {
		  foreach ($dados_buscar[$i] as $key => $value) {
		  }
		 $dados[] = array(
			'id' => $dados_buscar[$i]['id'],
			'data_compromisso' => $dados_buscar[$i]['data_compromisso'],
			'ini_compromisso' => $dados_buscar[$i]['ini_compromisso'],
			'fin_compromisso' => $dados_buscar[$i]['fin_compromisso'],
			'duracao' => $dados_buscar[$i]['duracao'],
			'compromisso' => $dados_buscar[$i]['compromisso'],
			'tipo_comp' => $dados_buscar[$i]['tipo_comp'],
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
		 $result = json_encode(array('mensagem'=>'compromisso não encontrado'));
		 echo $result;
		 
	 }
   }
	

 ?>
 
