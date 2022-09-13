<?php include 'config.php';
 session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 
 	$query = $pdo->prepare("UPDATE processos SET favorito = :favorito where id='$postjson[id]' "); 
       $query->bindValue(":favorito", "sim");
       $query->execute();
      if($query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
        ?>

 
     