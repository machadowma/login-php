<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" sizes="196x196" href="img/favicon.png">

  <title>Exemplo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="custom.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<body class="bg-light">

<?php include("menu_offline.php"); ?>


<div class="jumbotron text-center">
  <h1>Controle de Acesso</h1>
  <p>Exemplo de Login com PHP SESSION / MySQL / bootstrap</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Entrar</h3>
      
        <form action="conta_entrar_action.php" method="post">
          <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" id="login" placeholder="Informe seu login" name="login" required>
          </div>
          <div class="form-group">
            <label for="pwd">Senha:</label>
            <input type="password" class="form-control" id="senha" placeholder="Informe sua senha" name="senha" required>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-6">
      <h3>Criar Conta</h3>
      <p>Para ter acesso ao sistema, crie uma conta gratuita.</p>
      <a href='conta_criar_form.php' class='btn btn-info btn-rounded' >Criar Minha Conta</a>
      <br><br>
    </div>
  </div>
</div>

    
<br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>