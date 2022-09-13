<?php include 'config.php';
 session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 
 	$query = $pdo->prepare("INSERT INTO advogado_contrario SET nome = :nome, telefone_fixo = :telefone_fixo, telefone_celular = :telefone_celular, email = :email, id_processo='$postjson[processo]' ");
  
      
       $query->bindValue(":nome", $postjson['c_nome']);
       $query->bindValue(":telefone_fixo", $postjson['c_telefone_fixo']);
       $query->bindValue(":telefone_celular", $postjson['c_telefone_celular']);
       $query->bindValue(":email", $postjson['c_email']);
       $query->execute();
      if($query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
        ?>

 
     