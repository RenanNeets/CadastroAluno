<?php
 
header('Access-Control-Allow-Origin: *');
 
    include("./conexao.php");
 
    
 
    
    try {
        //code...
        $id = $_GET['id'];
        $stmt = $conexao->prepare("DELETE FROM tbagenda WHERE id='$id'");   
        $stmt ->execute();
    } catch (PDOException $erro) {
        //throw $th;
        return $erro->getMessage();
    }catch (mysqli_sql_exception $erro) {
        //throw $th;
        return $erro->getMessage();
    }
?>