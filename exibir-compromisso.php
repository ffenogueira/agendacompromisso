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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSS PERSONALIZADO -->
    <link href="css/style.css" rel="stylesheet">
    <!-- css datepicker-->
    <link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="js/bootstrap-datepicker.min.js"></script> 
    <script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>

       

</head>
<body>


   <div class="wrapper">
    <!-- area do titulo -->
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

        

          <h1>Lista de Compromissos</h1>

           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
            <ul class="nav navbar-nav navbar-right">
                
             
              
              

            <form class="navbar-form navbar-left" action="exibir-compromisso.php" method="post">
              <a href="adicionar-compromisso.php" class="btn btn-info">+ Adicionar</a>
              <div class="form-group">
               
                <div class="input-group date">
                <input type="text" class="form-control" id="datafiltro" name="datafiltro" placeholder="Buscar Compromisso" >
                <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
                </div>
                </div>         
                
              </div>

              <button type="submit" class="btn btn-default">Buscar</button>
            </form>
          

            </ul>
            <br>
          </div>

            
           <br>
            

             <!-- filtra compromisso  -->
             <?php
                     //isset() -> se existe
                if(isset($_POST["datafiltro"])){
                    $datafiltro = $_POST["datafiltro"];
             
                
                    $sql2 = "select  * from compromisso where data like '".$datafiltro."%'";
                    
                    $result2 = mysqli_query($con, $sql2);
                    
                    if(mysqli_num_rows($result2) > 0){
                        //encontrou                        
                        ?>            
                        <table id="formfiltro" class="table"> 
                            <tr>
                                <th>Titulo</th>
                                <th>Horário</th>
                                <th>Data</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                             
                               
                               
                            </tr>            
                        <?php
                                                
                        while($row = mysqli_fetch_array($result2)){
                            ?>
                            <tr>
                                <td><?php echo $row["titulo"];?></td>
                                <td><?php echo $row["horario"];?></td>
                                <td><?php echo $row["data"] = implode("/",array_reverse(explode("-",$row["data"])));?></td>
                                <td><a href="editar-compromisso.php?id=<?php echo $row["idcompromisso"];?>" class="btn btn-warning">!</a></td>
                                <td><a href="#" onclick="excluir(<?php echo $row["idcompromisso"];?>,'<?php echo $row["titulo"];?>')" class="btn btn-danger">X</a></td>

                                
                                
                            </tr>

                            <?php
                        }
                        
                    }else{
                        echo "Nenhum compromisso encontrado!";
                      }

                }
             ?> 
            </table>
       
        </div>

      
      </div>  
        
         
    </body>
    
      </nav>
  </div>
</div>
    <script type="text/javascript">
      $('#datafiltro').datepicker({  
        format: "yyyy-mm-dd", 
        language: "pt-BR",
        
      });
    </script>

     <!-- script para confirmar se realmente quer excluir o compromisso -->
        <script>
            
            function excluir(id,titulo){
                
                if(confirm('Deseja realmente excluir o compromisso '+titulo+'?')){
                    location.href = "excluir-compromisso.php?id="+id;

                }
                
            }
        
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