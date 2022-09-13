<?php include 'config.php';
 
$postjson = json_decode(file_get_contents("php://input"), true);

 
 
 	$query = $pdo->prepare("INSERT INTO clientes SET nome = :nome, telefone_fixo = :telefone_fixo, 
   telefone_celular = :telefone_celular, endereco = :endereco,cidade = :cidade, estado = :estado, email = :email,
     data_entrada = :data_entrada, advogado = :advogado, obs_geral = :obs_geral");
  
       $query->bindValue(":nome", $postjson['nome']);
       $query->bindValue(":telefone_fixo", $postjson['telefone_fixo']);
       $query->bindValue(":endereco", $postjson['endereco']);
       $query->bindValue(":telefone_celular", $postjson['telefone_celular']);
       $query->bindValue(":estado", $postjson['estado']);
       $query->bindValue(":cidade", $postjson['cidade']);
       $query->bindValue(":email", $postjson['email']);
       $query->bindValue(":data_entrada", $postjson['data_entrada']);
       $query->bindValue(":advogado", $postjson['advogado']);
       $query->bindValue(":obs_geral", $postjson['obs_geral']);
       $query->execute();
  
             
  
      if($query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
 

 
     