<?php
header('Content-type: application/json');
header('Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept"');
header("Access-Control-Allow-Origin: *", false);
include("conexao.php");
 

try {
    //code...
    $stmt = $conexao->prepare("SELECT * FROM tbagenda");    
    $stmt ->execute();
    $consulta = $stmt->fetchAll();
    echo json_encode($consulta);
} catch (PDOException $erro) {
    //throw $th;
    return $erro->getMessage();
}catch (mysqli_sql_exception $erro) {
    //throw $th;
    return $erro->getMessage();
}
?>