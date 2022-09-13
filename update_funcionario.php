<?php include 'config.php';
 
$postjson = json_decode(file_get_contents("php://input"), true);

 
 
 	$query = $pdo->prepare("INSERT INTO funcionarios SET nome = :nome, funcao = :funcao, outra_funcao = :outra_funcao,
    oab = :oab, estado_oab = :estado_oab, rg = :rg,cpf = :cpf, endereco = :endereco, cidade = :cidade,
    nacionalidade = :nacionalidade, estado_civil = :estado_civil, data_nascimento = :data_nascimento, telefone_fixo = :telefone_fixo,
    telefone_celular = :telefone_celular, f_usuario = :f_usuario,f_senha = :f_senha, f_compromissos = :f_compromissos, 
    f_processos = :f_processos,f_financeiro = :f_financeiro, f_tarefas = :f_tarefas, f_equipe = :f_equipe,
    f_cobranca = :f_cobranca,f_clientes = :f_clientes, f_agendas = :f_agendas, f_encaminhamento = :f_encaminhamento");
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
       $query->bindValue(":f_usuario", $postjson['f_usuario']);
       $query->bindValue(":f_senha", $postjson['f_senha']);
       $query->bindValue(":f_compromissos", $postjson['f_compromissos']);
       $query->bindValue(":f_processos", $postjson['f_processos']);
       $query->bindValue(":f_financeiro", $postjson['f_financeiro']);
       $query->bindValue(":f_tarefas", $postjson['f_tarefas']);
       $query->bindValue(":f_equipe", $postjson['f_equipe']);
       $query->bindValue(":f_cobranca", $postjson['f_cobranca']);
       $query->bindValue(":f_clientes", $postjson['f_clientes']);
       $query->bindValue(":f_agendas", $postjson['f_agendas']);
       $query->bindValue(":f_encaminhamento", $postjson['f_encaminhamento']);
       $query->execute();
  
             
  
      if($query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
 

 
     