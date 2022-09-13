<?php include 'config.php';
 session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 
 	$query = $pdo->prepare("DELETE FROM processos  where id='$postjson[id]'"); 
      
       $query->execute();
      if($query){
        $result = json_encode(array('success'=>$postjson['id']));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
        ?>

 
     