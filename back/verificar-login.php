<?php
//conecta ao banco de dados
include "../config.php";
    //inicia a sessão
    session_start();
    // as variáveis login e senha recebem os dados digitados na página anterior
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);

    
    // faz a consulta no banco 
    $sql = "select * from usuario where login = '".$login."' and senha = '".$senha."'";
    //guarda o resultado da consulta 
    $result = mysqli_query($con, $sql);
    // Se os dados conferirem , o valor da consulta irá retornar 1, caso não encontre vai cair no else dizendo que o login/senha estão errados
    if(mysqli_num_rows($result) == 1){
                
        $row = mysqli_fetch_array($result);
        
      
        
                
        header("location:../painel.php");
        
    }else{
       
        header("location:../index.php?erro"); //redirecionamento em php
        
    }
    
?>
