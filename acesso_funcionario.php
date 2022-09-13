<?php include 'config.php';
 session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 
 	$query = $pdo->prepare("UPDATE funcionarios SET f_usuario = :f_usuario, f_senha = :f_senha where id='$postjson[id_usuario]' ");
  
       $query->bindValue(":f_usuario", $postjson['f_usuario']);
       $query->bindValue(":f_senha", $postjson['f_senha']);
      
       $query->execute();
      if($query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
        ?>

 
     