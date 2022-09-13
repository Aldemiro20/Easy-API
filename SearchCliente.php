<?php
include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

if(!empty($postjson['nome'])){
 $query_buscar = $pdo->query("SELECT * from clientes where nome='$postjson[nome]'  ORDER BY id DESC limit 1 ");
 
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
/** */
//outro

else if (!empty($postjson['nome']) && !empty($postjson['data'])){
	$query_buscar = $pdo->query("SELECT * from clientes where  data_entrada='$postjson[data]' and nome='$postjson[nome]'   ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
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
	$query_buscar = $pdo->query("SELECT * from clientes where  data_entrada='$postjson[data]' ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
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

else if (!empty($postjson['cidade']) && !empty($postjson['estado'])){
	$query_buscar = $pdo->query("SELECT * from clientes where  estado='$postjson[estado]' and cidade='$postjson[cidade]'  ORDER BY id DESC limit 1 ");
	//where id_usuario='$postjson[pesquisa]'
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

 ?>
 
 