<?php
include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);


 $query_buscar = $pdo->query("SELECT * from usuarios where email='$postjson[email]' and senha = '$postjson[senha]'");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);

 if(@count($dados_buscar)>0){
 $email=$postjson['email'];
 $stmt = $pdo->prepare("SELECT * from usuarios WHERE email=:email");
 $stmt->bindValue(":email", $email);
 $run=$stmt->execute();
 $rs=$stmt->fetch(PDO::FETCH_ASSOC);
	// pega o id do usuario do email introduzido

	 $query = $pdo->query("SELECT id from usuarios WHERE email= '$email'");
	 $query->execute();
	 $linha=$query->fetch(PDO::FETCH_ASSOC);
	 $r_id=$linha['id'];
	 $id=$r_id;
	 $_SESSION["id_usuario"]=$id;

	//mostra os dados
   	for ($i = 0; $i < count($dados_buscar); $i++) {
   	foreach ($dados_buscar[$i] as $key => $value) {
   	}
  	$dados[] = array(
    
    'nome' => $dados_buscar[$i]['nome'],
    'id' => $dados_buscar[$i]['id'],
	'email' => $dados_buscar[$i]['email'],
  	);
	}

	$result = json_encode(array('mensagem'=>'logado', 'user'=>$dados));
	echo $result;

 }
 else{
 	 $result = json_encode(array('mensagem'=>'errado'));
 	 echo $result;
 	 
  }

 ?>
 
 