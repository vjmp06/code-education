<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Nosso Site</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">
	<?php echo require_once("menu.php");?>
    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h3>Para dúvidas, informações e sugestões envie nos uma mensagem</h3>
        <form action="contatos.php?act=save" method="post">
		<h6>Nome:</h6>
		<input type="text" name="name">
		<h6>Email:</h6>
		<input type="text" name="email">
		<h6>Assunto:</h6>
		<input type="text" name="assunto">
		<h6>Mensagem:</h6>
		<input type="text" name="mensagem"><br><br>
		<input type="reset" name="botao1" value="Limpar">
		<input type="submit" name="botao" value="Enviar">
		</form>
		
		
		<?php 
			
			if(isset($_POST['botao'])){
			echo '<p>Sua mensagem foi enviada. Em breve entraremos em contato. Seguem os dados informados:<p>';
			echo "<b>Nome:</b> ".($_POST['name']).'<br>';
			echo "<b>Email:</b> ".($_POST['email']).'<br>';
			echo "<b> Assunto:</b> ".($_POST['assunto']).'<br>';
			echo "<b>Mensagem:</b> ".($_POST['mensagem']).'<br>';
			}
				
		
		
		?>
		
      </div>


      


    </div> <!-- /container -->
	
	...
</div><!-- div wrapper -->	


<?php require_once("rodape.php"); ?>

</body>
</html>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
	
