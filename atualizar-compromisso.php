<?php 
    include_once 'back/autenticacao.php';
    include "config.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Compromisso</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- CSS PERSONALIZADO -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            
            $id = $_POST["idcompromisso"];
            $titulo = $_POST["titulo"];
            $horario = $_POST["horario"];
            $data = $_POST["data"];
            
            
            
                        
            $sql = "update compromisso set titulo = '".$titulo."', horario = '".$horario."', data = '".$data."' 
            where idcompromisso = ".$id;
                        
            if(mysqli_query($con, $sql)){
                $msg = "Atualizado com sucesso!";
            }else{
                $msg = "Erro ao atualizar!";
            }            
            mysqli_close($con);
        ?>
        
        <script>
            alert('<?php echo $msg; ?>');
            location.href="../listar-compromisso.php"; //redirecionamento em javascript 
        </script>
        
        
        
    </body>
</html>
