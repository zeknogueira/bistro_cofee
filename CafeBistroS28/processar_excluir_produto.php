<?php
require_once "conexao.php";

$id = $_POST["id"];

 $prepare_sql = $conn->prepare("DELETE FROM PRODUTOS WHERE id =?");
 if($prepare_sql){
    $prepare_sql->bind_param("i", $id);
    if($prepare_sql->execute()){
        $prepare_sql->close();
        $conn->close();
        header("Location: admin.php?sucess=1");
        exit();
    }
    else{
        $prepare_sql->close();
        $conn->close();
        header("Location: admin.php?error=1");  
    }
    }
 
?>