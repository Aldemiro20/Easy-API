<?php include 'config.php';
 
$postjson = json_decode(file_get_contents("php://input"), true);

 
 
 	$query = $pdo->prepare("INSERT INTO compromissos SET data_compromisso = :data_compromisso,ini_compromisso = :ini_compromisso, fin_compromisso = :fin_compromisso,
    duracao = :duracao, compromisso = :compromisso, tipo_comp = :tipo_comp,cliente = :cliente, notificar_cliente = :notificar_cliente, notificar_advogado = :notificar_advogado,
    obs_geral = :obs_geral, id_usuario='$postjson[id_usuario]'");
 
       $query->bindValue(":data_compromisso", $postjson['data_compromisso']);
       $query->bindValue(":ini_compromisso", $postjson['ini_compromisso']);
       $query->bindValue(":fin_compromisso", $postjson['fin_compromisso']);
       $query->bindValue(":duracao", $postjson['duracao']);
       $query->bindValue(":compromisso", $postjson['compromisso']);
       $query->bindValue(":tipo_comp", $postjson['tipo_comp']);
       $query->bindValue(":cliente", $postjson['cliente']);
       $query->bindValue(":notificar_cliente", $postjson['notificar_cliente']);
       $query->bindValue(":notificar_advogado", $postjson['notificar_advogado']);
       $query->bindValue(":obs_geral", $postjson['obs_geral']);
       $query->execute();
  
             
  
      if($query){
        $result = json_encode(array('success'=>$postjson['tipo_comp']));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
 

 
     