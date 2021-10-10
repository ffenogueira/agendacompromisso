<?php 
    include_once 'back/autenticacao.php';
    include "config.php";

?>

<!DOCTYPE html>
<html lang="PT-Br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- CSS PERSONALIZADO -->
  	<link href="css/style.css" rel="stylesheet">
  	 <!-- css datepicker-->
    <link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="js/bootstrap-datepicker.min.js"></script> 
    <script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
	<title>Editar Compromisso</title>
</head>
<body>

<?php 
            //veio através do botao "!" editar. (editar-compromisso.php?id=1)
            $id = $_GET["id"];
                        
            
            $sql = "select * from compromisso where idcompromisso = ".$id;
            
            $result = mysqli_query($con, $sql); //executa a consulta
            
            //coloca na variável $row os valores da consulta
            $row = mysqli_fetch_array($result);
            
        ?>

    <div class="wrapper">
    <!-- Conteudo -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>Agenda de Compromisso </h3>
        </h3>
      </div>

      <ul class="list-unstyled components">
        <p style="text-align: center;">Menu</p>

        <li style="margin-top: 250px;" class="active">
          <a href="painel.php">Agenda</a>

        </li>
        <li>
          <a href="adicionar-compromisso.php">Adicionar Compromisso</a>


        </li>
        <li>
          <a href="listar-compromisso.php">Listar Compromissos</a>
        </li>
        <br>
        <br>
         <li>
          <a href="logout.php?sair=logout"><img src="imagens/logout.png"></img> Sair</a>
        </li>
       


      </ul>


    </nav>

    <!-- Conteudo -->
    <div id="content">



      <nav class="navbar navbar-default">
        <div class="container-fluid">

          <div class="navbar-header">

           
                <h1>Editar Compromisso</h1>
                            
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <form name="form-editar" action="back/atualizar-compromisso.php" method="post">

          	<input type="hidden" name="idcompromisso" value="<?php echo $row["idcompromisso"];?>">  

            <div class="form-group">
            <label>Titulo do Compromisso</label>
            <input type="text" class="form-control" name="titulo" placeholder="Titulo do Compromisso" value="<?php echo $row["titulo"];?>" required>
            </div>
    
            <div class="form-group">
           <label>Horário:</label>
            <input type="text" class="form-control" name="horario" placeholder="azul #eeee" value="<?php echo $row["horario"];?>" required>
           </div>

           
           <div class="form-group">
           <label>Data:</label>
            <div class="input-group date">
              <input type="text" class="form-control" id="data" name="data" value="<?php echo $row["data"];?>" required >
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
           </div>

          

               <input type="submit" value="Atualizar" class="btn btn-primary">


          </form>
              <br>
              <br>
              <br>
                

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
            	
            </ul>
          </div>
        </div>
      </nav>
  </div>
</div>
	<script type="text/javascript">
      $('#data').datepicker({  
        format: "dd/mm/yyyy", 
        language: "pt-BR",
        startDate: '+0d',
      });
    </script>
	
</body>
</html>