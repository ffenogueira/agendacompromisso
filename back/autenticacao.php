<?php  
 // verifica se existe a sessao 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  
}else{

$logado = $_SESSION['login'];
}
?>