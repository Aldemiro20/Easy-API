<?php include 'config.php';
 
$postjson = json_decode(file_get_contents("php://input"), true);

 if(isset($postjson['nome'])){
 
 	$query = $pdo->prepare("INSERT INTO funcionarios SET nome = :nome, funcao = :funcao, outra_funcao = :outra_funcao,
    oab = :oab, estado_oab = :estado_oab, rg = :rg,cpf = :cpf, endereco = :endereco, cidade = :cidade,
    nacionalidade = :nacionalidade, estado_civil = :estado_civil, data_nascimento = :data_nascimento, telefone_fixo = :telefone_fixo,
    telefone_celular = :telefone_celular, id_usuario = :id_usuario");
    //id_usuario='$_SESSION[id_usuario]'
  
       $query->bindValue(":nome", $postjson['nome']);
       $query->bindValue(":funcao", $postjson['funcao']);
       $query->bindValue(":outra_funcao", $postjson['outra_funcao']);
       $query->bindValue(":oab", $postjson['oab']);
       $query->bindValue(":estado_oab", $postjson['estado_oab']);
       $query->bindValue(":rg", $postjson['rg']);
       $query->bindValue(":cpf", $postjson['cpf']);
       $query->bindValue(":endereco", $postjson['endereco']);
       $query->bindValue(":cidade", $postjson['cidade']);
       $query->bindValue(":nacionalidade", $postjson['nacionalidade']);
       $query->bindValue(":estado_civil", $postjson['estado_civil']);
       $query->bindValue(":data_nascimento", $postjson['data_nascimento']);
       $query->bindValue(":telefone_fixo", $postjson['telefone_fixo']);
       $query->bindValue(":telefone_celular", $postjson['telefone_celular']);
       $query->bindValue(":id_usuario", $postjson['id_usuario']);
      
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

 
     ?>