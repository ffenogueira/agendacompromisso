
<?php 
    include_once 'back/autenticacao.php';
    include "config.php";

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           // pega a variavel id
           $id = $_GET["id"];
    
            // deleta no banco pela id 
            $sql = "DELETE from compromisso where idcompromisso = ".$id;
            
            if(mysqli_query($con, $sql)){
                $msg = "Compromisso excluído com sucesso!";
            }else{
                $msg = "Erro ao excluir compromisso";
            }
            mysqli_close($con);            
        ?>
            <script>
                alert('<?php echo $msg; ?>');
                location.href = "listar-compromisso.php";
            </script>
        
    </body>
</html>
