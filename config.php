<?php 

//nome do site 

$site = "127.0.0.1/agendacompromisso/";

//nome do banco de dados

$banco = "agendacompromisso";

//conexão com o banco 

$con = mysqli_connect("127.0.0.1","root","",$banco);

//Checar conexao

if (mysqli_connect_errno())
  {
  echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,$banco);


?>