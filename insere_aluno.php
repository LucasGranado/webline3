<?php 
    require_once('db.class.php');

    $nome=$_POST['nome'];
    $ra=$_POST['ra'];
    $email=$_POST['email'];
    $turma=$_POST['turma'];

    $objDb = new db();

    $link = $objDb->conecta_db();    

    $sql = " insert into alunos(nome, ra, email,fk_turmas) values ('$nome','$ra','$email', '$turma') ";
    
    mysqli_query($link, $sql);
    
?>
