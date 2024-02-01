<?php
// toda as partes da API podem acessar arquivo;
header('Access-Control-Allow-Origin: *');
 
    include("./conexao.php");
 
    // Obtendo o JSON recebido na variável $json.
    $json = file_get_contents('php://input');
 
    // Decodificando o JSON recebido e armazenando na variável $obj.
    $obj = json_decode($json,true);
 try {
    //code...
    $id = $obj['id'];
    $nome = $obj['nome'];
    $email = $obj['email'];
    $telefone = $obj['telefone'];  
    
    if($id==""){
        $stmt = $conexao->prepare("INSERT INTO tbagenda VALUES(null,'$nome','$email','$telefone');");   
        $stmt ->execute();
 
    }else{
        $stmt = $conexao->prepare("UPDATE tbagenda SET nome='$nome', email='$email', telefone= '$telefone' WHERE id='$id';");   
        $stmt ->execute();
    }
 } catch (PDOException $erro) {
    //throw $th;
    return $erro->getMessage();
}catch (mysqli_sql_exception $erro) {
    //throw $th;
    return $erro->getMessage();
}
    
 
   //header("location:produto-exibir.php");
 
?>