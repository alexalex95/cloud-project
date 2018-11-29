<?php 


include_once ("class.managerDB.php");

class data {

    function data() {      
    }
    
    
    function query ($sql, $params=array(), $param_list=array(), $transaction=False, $strip_tags=false) {
        $managerDB = new managerDB();
        $connection = $managerDB->conectar("mysql");
        if ($connection!=null) {
            $response=array('success'=>true);
            try {
                $query=$connection->prepare($sql);
                foreach ($param_list as $param) {
                    if ($param=='start' or $param=='limit') {
                        @$query->bindParam(':'.$param, intval($params[$param]), PDO::PARAM_INT);
                    } else {
                        if ($strip_tags)    $params[$param]=strip_tags($params[$param]);
                        @$query->bindParam(':'.$param, $params[$param]);
                    }
                }
                if ($transaction) $connection->beginTransaction();
                if (count($param_list)>0) {
                    $query->execute();
                } else {
                    $query->execute($params);
                }
                if ($transaction) {
                    $response['insertId']=intval($connection->lastInsertId());
                    $connection->commit();
                }
                $response['items']=$query->fetchAll(PDO::FETCH_ASSOC);
                $response['total']=$query->rowCount();
            } catch(PDOException $error) { 
                if ($transaction) $connection->rollback();
                $response= array('success'=>false, 'error'=>$error->getMessage());
            }
        } else {
            $response= array('success'=>false, 'error'=>'No está conectado al servidor de bases de datos.');
        }
        return $response;
    }
    function upload($name, $tmp_name, $destiny){
    $character =  array(' ', '_', '-', '(', ')');
    $actually_name = strtolower(str_replace($character,'',$name)); 
    $ext = end(explode('.',$actually_name)); 
    $name_clean = substr($actually_name,0,strlen($actually_name)-(strlen($ext)+1));
    $new_name = $name_clean.md5(date('d-m-Y H:i:s').rand(0, 100000)).".".$ext; 
    $destiny = $destiny.$new_name;
    if(@copy($tmp_name, $destiny)){
        $response = array('success' => true, 'file'=>$new_name);
    }else{
        $response = array('success' => false, 'file'=>$tmp_name, 'error'=> 'No se subio el archivo adjunto');
    }
    return $response;
}
}    
?>        