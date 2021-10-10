<?php 
    include_once 'back/autenticacao.php';
    include "config.php";

?>

<!DOCTYPE html>
<html lang="PT-Br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agenda de Compromisso</title>

	<!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS PERSONALIZADO -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>


   <div class="wrapper">
    <!-- Sidebar Holder -->
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
          <a href="adicionar-compromisso.php" >Adicionar Compromisso</a>


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

    

  <!-- Botao menu responsivo -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                          <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                          <h1>Agenda</h1>
                          <br>
                          <h4>Cadastre os seus compromissos e faça buscas </h4>
                            
                        </div>
                    </div>
                </nav>

            
            </div>
        </div>





        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
               

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>


</div>


	
</body>
</html>