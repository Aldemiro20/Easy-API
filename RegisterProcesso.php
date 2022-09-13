<?php include 'config.php';
 
$postjson = json_decode(file_get_contents("php://input"), true);

 
 if(isset($postjson['nome_cliente'])){

 
 	$query = $pdo->prepare("INSERT INTO processos SET nome_cliente = :nome_cliente, n_processo = :n_processo, autor = :autor,
    data_ingresso = :data_ingresso, forum = :forum, comarca = :comarca,p_cliente = :p_cliente, op_cliente = :op_cliente, status = :status,
    o_status = :o_status, accao = :accao, o_accao = :o_accao, rito = :rito, o_rito = :o_rito,v_causa = :v_causa");
    //id_usuario='$_SESSION[id_usuario]'
   
      
       $query->bindValue(":nome_cliente", $postjson['nome_cliente']);
       $query->bindValue(":n_processo", $postjson['n_processo']);
       $query->bindValue(":autor", $postjson['autor']);
       $query->bindValue(":data_ingresso", $postjson['data_ingresso']);
       $query->bindValue(":forum", $postjson['forum']);
       $query->bindValue(":comarca", $postjson['comarca']);
       $query->bindValue(":p_cliente", $postjson['p_cliente']);
       $query->bindValue(":op_cliente", $postjson['op_cliente']);
       $query->bindValue(":status", $postjson['status']);
       $query->bindValue(":o_status", $postjson['o_status']);
       $query->bindValue(":accao", $postjson['accao']);
       $query->bindValue(":o_accao", $postjson['o_accao']);
       $query->bindValue(":rito", $postjson['rito']);
       $query->bindValue(":o_rito", $postjson['o_rito']);
       $query->bindValue(":v_causa", $postjson['v_causa']);
       $query->execute();
  
             
      if($query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
      }else{
         $result = json_encode(array('success'=>"dados nao preenchido"));  
         echo $result;
      }

 
     