<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/everything.css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
  <title>UNIUNI</title>
</head>
<body>
    <nav class="nav">
        <ul>
            <a href="index.html"> <li id="logo"><img id="logo1" src="https://www.tailorbrands.com/wp-content/uploads/2020/07/twitter-logo.jpg"></li></a>
           
            <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            </div>
      <ul class="nav-list">   
            <li><a href="index.html">Home</a>
        <li><a href="#">O nas</a>
            <li class="drop"><a href="#">Oferta</a>
                <ul class="dropdown">
                   
                    <li><a href="#">Oferta 01</a></li>
                    <li><a href="#">Oferta 02</a></li>
                    <li><a href="#">Oferta 03</a></li>
                </ul>
            </li>
            <li><a href="#">Aktualnosci</a>
            <li><a href="#">Kontakt</a>
               
               <li><a href="#"><img id="perfilimg" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='28' height='28' fill='rgba(255,255,255,1)'%3E%3Cpath d='M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z'%3E%3C/path%3E%3C/svg%3E"></a></li> 
               
            </ul>
            </ul>
    </nav>

    <div id="divuser">
        <h1>Fazer Login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="E-mail">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        Não tem uma conta? <a href="CadastroUsuário1.php">Cadastrar Usuário</a>
        <br><br>

        <input class="inputSubmit" name="submit" id="submit" type="submit" value="Enviar">
    </form>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="JS/Menu.js" defer></script>
</body>

</html>
