<?php include 'config.php';
 
$postjson = json_decode(file_get_contents("php://input"), true);

 
 
 	$query = $pdo->prepare("UPDATE tarefas SET data_tarefa = :data_tarefa, ini_tarefa = :ini_tarefa, fin_tarefa = :fin_tarefa,
duracao = :duracao, tarefa = :tarefa, cliente = :cliente, notificar_cliente = :notificar_cliente, notificar_advogado = :notificar_advogado,
    obs_geral = :obs_geral where id='$postjson[id]' and id_usuario='$postjson[id_usuario]'");
 
       $query->bindValue(":data_tarefa", $postjson['data_tarefa']);
       $query->bindValue(":ini_tarefa", $postjson['ini_tarefa']);
       $query->bindValue(":fin_tarefa", $postjson['fin_tarefa']);
       $query->bindValue(":duracao", $postjson['duracao']);
       $query->bindValue(":tarefa", $postjson['tarefa']);
       $query->bindValue(":cliente", $postjson['cliente']);
       $query->bindValue(":notificar_cliente", $postjson['notificar_cliente']);
       $query->bindValue(":notificar_advogado", $postjson['notificar_advogado']);
       $query->bindValue(":obs_geral", $postjson['obs_geral']);
       $query->execute();
  
             
  
      if(!$query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
 

 
     