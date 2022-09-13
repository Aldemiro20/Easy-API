<?php include 'config.php';
 
$postjson = json_decode(file_get_contents("php://input"), true);

 if(isset($postjson['email'])){
 $query_buscar = $pdo->query("SELECT * from usuarios where email = '$postjson[email]' ");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
 if(@count($dados_buscar) > 0){
 	 $result = json_encode(array('success'=>'Email já Cadastrado!'));
 	 echo $result;
 	 exit();
 }else{
 	$query = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha ");
  
       $query->bindValue(":nome", $postjson['nome']);
       $query->bindValue(":email", $postjson['email']);
       $query->bindValue(":senha", $postjson['senha']);

      
       $query->execute();
  
             
  
      if($query){
        $result = json_encode(array('success'=>"Cadastrado"));
  
        }else{
        $result = json_encode(array('success'=>"Usuario não cadastrado"));
    
        }

        echo $result;
 }

}else{
  $result = json_encode(array('success'=>"Dados nao preenchido")); 
  echo $result;
}
     

?>