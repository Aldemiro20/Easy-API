<?php

include_once('config.php');
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);


//$postjson['filtro']
$filtro ="trinta" ;
    $resultado = [];
     
    switch($filtro){
        case 'trinta':
            $query = $pdo->query("SELECT * from clientes");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
            for ($i = 0; $i < count($res); $i++) {
              foreach ($res[$i] as $key => $value) {
              }
              $dados[] = array(
                'id' => $res[$i]['id'],
                'nome_contacto1' => $res[$i]['nome_contacto1'],
                'nome_contacto2' => $res[$i]['nome_contacto2'],
                'telefone_fixo' => $res[$i]['telefone_fixo'],
                'telefone_celular' => $res[$i]['telefone_celular'],
                'estado' => $res[$i]['estado'],
                'cidade' => $res[$i]['cidade'],
                'email' => $res[$i]['email'],
                'data_entrada' => $res[$i]['data_entrada'],
                'advogado' => $res[$i]['advogado'],
                'id_usuario' => $res[$i]['id_usuario'],
              );
            }
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'dez':
            $query = $pdo->query("SELECT * from camarao where gramatura=10 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
            for ($i = 0; $i < count($res); $i++) {
              foreach ($res[$i] as $key => $value) {
              }
              $dados[] = array(
                'id' => $res[$i]['id'],
                'nome_contacto1' => $res[$i]['nome_contacto1'],
                'nome_contacto2' => $res[$i]['nome_contacto2'],
                'telefone_fixo' => $res[$i]['telefone_fixo'],
                'telefone_celular' => $res[$i]['telefone_celular'],
                'estado' => $res[$i]['estado'],
                'cidade' => $res[$i]['cidade'],
                'email' => $res[$i]['email'],
                'data_entrada' => $res[$i]['data_entrada'],
                'advogado' => $res[$i]['advogado'],
                'id_usuario' => $res[$i]['id_usuario'],
              );
            }
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'vinte':
            $query = $pdo->query("SELECT * from camarao where gramatura=20 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
            for ($i = 0; $i < count($res); $i++) {
              foreach ($res[$i] as $key => $value) {
              }
              $dados[] = array(
                'id' => $res[$i]['id'],
                'nome_contacto1' => $res[$i]['nome_contacto1'],
                'nome_contacto2' => $res[$i]['nome_contacto2'],
                'telefone_fixo' => $res[$i]['telefone_fixo'],
                'telefone_celular' => $res[$i]['telefone_celular'],
                'estado' => $res[$i]['estado'],
                'cidade' => $res[$i]['cidade'],
                'email' => $res[$i]['email'],
                'data_entrada' => $res[$i]['data_entrada'],
                'advogado' => $res[$i]['advogado'],
                'id_usuario' => $res[$i]['id_usuario'],
              );
            }
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
       
    }


?>