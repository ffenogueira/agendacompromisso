<?php
include "../config.php";

$sql = "INSERT INTO compromisso(
titulo,
data,
horario

)
VALUES (
'".$_POST["titulo"]."',
'".$_POST["data"]."',
'".$_POST["horario"]."'

)";


//Executo a minha query

$query = mysqli_query($con, $sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
	?>
  			<script>
                alert('<?php echo "Compromisso cadastrado com Sucesso!" ?>');
                location.href = "../listar-compromisso.php";
            </script>

<?php
}
else {
  echo "Não foi possivel inserir o registro. <br><br>".mysqli_error();
}
?>