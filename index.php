<!-- incluir conexao -->
	<?php
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

  	<!-- CSS LOGIN -->
  	<link href="css/login.css?v2=<?php echo time();?>" rel="stylesheet">
</head>

<body>

	<div class="container">
		
		<form class="formlogin" action="back/verificar-login.php" method="post">
			<h2 class="form-login-head" >Agenda de Compromissos</h2>
            <br>
                <label>
                    Login:<br>
                    <input type="text" name="login" class="form-control" placeholder="Login"  required>
                </label>
                <br>
                
                <label>
                    Senha:<br>
                    <input type="password" name="senha" class="form-control" placeholder="senha"  required>
                </label>
                <br>
                <Br>
                
                <input type="submit" value="Entrar" class="btn btn-primary">

               <br>
               <br>
            <?php
                if(isset($_GET['erro'])){
                  echo "Login ou senha inválidos!";
                }
            ?>
         
            </form>




	</div>
	
</body>
</html>