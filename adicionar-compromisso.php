
<!DOCTYPE html>
<html lang="PT-Br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSS PERSONALIZADO -->
    <link href="css/style.css" rel="stylesheet">
    <!-- css datepicker-->
    <link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="js/bootstrap-datepicker.min.js"></script> 
    <script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
	<title>Adicionar Compromisso</title>
</head>
<body>

	<div class="wrapper">
    <!-- Sidebar -->
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

                        <!-- botao menu , responsivo -->  
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                       <!-- fim do botao menu -->
                       
          <div class="navbar-header">

           
                <h1>Adicionar Compromisso</h1>
                            
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <form name="form-adicionar" action="back/gravar-compromisso.php" method="post">

            <div class="form-group">
            <label>Titulo do Compromisso</label>
            <input type="text" class="form-control" name="titulo" placeholder="Titulo do Compromisso" required>
            </div>
    
           <div class="form-group">
           <label>Data:</label>
            <div class="input-group date">
              <input type="text" class="form-control" id="data" name="data" required >
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
           </div>

            <div class="form-group">
           <label>Horário:</label>
            <input type="time" class="form-control" name="horario" required>
           </div>

          

                <input type="submit" value="Adicionar" class="btn btn-primary">


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
</body>
</html>