<?php include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);
$domain_name = "https://10.0.2.2/backend-flux/" ;
$target_dir = "processos";
$target_dir = $target_dir . "/" .rand() . "_" . time() . ".pdf";	


if(move_uploaded_file($_FILES['File']['tmp_name'], $target_dir)){
  
  $target_dir = $domain_name . $target_dir;
  $stmt = $pdo->prepare("INSERT INTO arquivos SET arquivo = :arquivo");
  $stmt->execute(array(':arquivo'=>$target_dir));
  
  $MESSAGE = "Upload feito." ;
  echo json_encode(array('success'=>$target_dir));
}
 

 ?>
     