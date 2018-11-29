<?php

if (isset($_POST['tag'])) {

  try {
    $conn= require_once'../config/config2.php';
    $sql ="SELECT * FROM modulo";
    $result = $conn->prepare($sql) or die ($sql);
if(!$result->execute()) return false;

if($result->rowCount() > 0){
$json = array();
while ($row = $result->fetch()) {

$json[]= array(

  'Id' => $row['Id'],
  'Nombre'=> $row['Nombre']
);
}
  $json['success'] = true;
  echo json_encode($json);
}

  } catch (PDOException $e) {
    echo 'Error '.$e->getMessage();
  }

}

?>
