<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nome de usuário</label>
     	<input type="text" name="uname" placeholder="Nome de usuário"><br>

     	<label>Senha</label>
     	<input type="password" name="password" placeholder="Senha"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Crie uma conta</a>
     </form>
</body>
</html>