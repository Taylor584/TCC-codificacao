<?php

if (isset($_POST['submit'])) {
    include_once('config.php');

    // Escape das variáveis para evitar injeção SQL
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $grau = mysqli_real_escape_string($conexao, $_POST['grau']);
    $data_nasc = mysqli_real_escape_string($conexao, $_POST['dat_nasc']);
    $genero = mysqli_real_escape_string($conexao, $_POST['genero']);
    $cep = mysqli_real_escape_string($conexao, $_POST['cep']);
    $rua = mysqli_real_escape_string($conexao, $_POST['address']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['neighborhood']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['city']);
    $estado = mysqli_real_escape_string($conexao, $_POST['estado']);
    $pais = mysqli_real_escape_string($conexao, $_POST['pais']);

    // Usando prepared statements para evitar injeção SQL
    $stmt = $conexao->prepare("INSERT INTO usuarios (nome, email, senha, grau, data_nasc, genero, CEP, Rua, Bairro, Cidade, Estado, País) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt === false) {
        die('Erro ao preparar a consulta: ' . $conexao->error);
    }

    // Liga as variáveis aos parâmetros
    $stmt->bind_param("ssssssssssss", $nome, $email, $senha, $grau, $data_nasc, $genero, $cep, $rua, $bairro, $cidade, $estado, $pais);

    // Executa a consulta
    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $stmt->error;
    }

    // Fecha a declaração
    $stmt->close();
} else {
    echo "O formulário não foi enviado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/everything.css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Bootstrap icons -->
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
/>

  <title>UNIUNI</title>


</head>
<body> 
  <body id="checkout-page">

    

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

  <div id="fade" class="hide">
    <div id="loader" class="spinner-border text-info hide" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
    <div id="message" class="hide">
      <div class="alert alert-light" role="alert">
        <h4>Mensagem:</h4>
        <p></p>
        <button id="close-message" type="button" class="btn btn-secondary">
          Fechar
        </button>
      </div>
    </div>
  </div>
 

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="address-form">

        <fieldset>
        <div id="divcad" class="form-floating">
          <h1>Cadastrar Usuário</h1>
          <label class="labelInput">Nome de Usuário</label>
          <input name="nome" type="text" id="nome" placeholder="Usuário" required>
          <br><br>
          <label class="labelInput">E-mail</label>
          <input name="email" type="email" placeholder="Nome@exemplo.com" required>
          <br><br>
        <Table>
          <tr>
          <td>
          <label class="labelInput">Senha aqui</label>
          <input name="senha" type="password" placeholder="A123..." required></td>
  
          <td><label class="labelInput">Confirmar:</label>
          <input name="senha_confirmacao" type="password" placeholder="A123..." required></td>
      </tr></Table>
      <label for="name" class="labelInput">Grau:</label>
      <select name="grau" type="text"class="form-select shadow-none" placeholder="Grau"required>
        <option>Ensino Fundamental Incompleto</option>
        <option>Ensino Fundamental Completo</option>
        <option>Ensino Médio Incompleto</option>  
        <option>Ensino Médio Completo</option>
        <option>Ensino Superior Incompleto</option>
        <option>Ensino Superior Completo</option>
      </select>
      </td>
      <table>
          <tr>
              <td>
          <label>Data de Nascimento:</label>
          <input name="dat_nasc" type="date" name="data_nascimento" id="data_nascimento" required> </td>
  
            <td>
              <label class="labelInput">Gênero:</label>
              <select name="genero" type="text" class="form-select shadow-none" placeholder="Gênero" required>
                <option >Mulher</option>
                <option >Homem</option>
                <option >Outro</option>
                <option>Prefiro não declarar</option>
              </select>
          </td>  
        </table>
        <table>
          <tr>
              <td> 
                <label class="labelInput" for="cep">Digite o seu CEP</label>
            <input
              type="text"
              id="cep"
              name="cep"
              placeholder="Digite o seu CEP"
              maxlength="8"
              minlength="8"
              required
            /> 
        </td>
        <td>
          <label class="labelInput" for="address">Rua</label>
            <input
              type="text"
              id="address"
              name="address"
              placeholder="Rua"
              disabled
              required
              data-input
            />
          </td>
        </tr>
        <tr>
          <td>
            <label class="labelInput" for="neighborhood">Bairro</label>
            <input
              type="text"
              id="neighborhood"
              name="neighborhood"
              placeholder="Bairro"
              disabled
              required
              data-input
            />
   </td>
              <td>
                <label class="labelInput" for="city">Cidade</label>
                <input
                  type="text"
                  id="city"
                  name="city"
                  placeholder="Cidade"
                  disabled
                  required
                  data-input
                />
                </td>
                </tr>
<tr>
<td>
            <label class="labelInput">Estado:</label>
            <select
              name="estado"
              id="region"
              disabled
              required
              data-input
            >
              <option selected>Estado</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
            </td>
            <td>
              <label class="labelInput">País:</label>
              <input name="pais" type="text" placeholder="" required >
          </td></tr>

        </table>

        Já tem uma conta? <a href="Usuário.php">Fazer Login</a>
        <br><br>
        <input name="submit" id="submit" type="submit">
        <fildset/>
        </div>
      </form>
    </div>
   


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="JS/Menu.js" defer></script>
</body>

</html>
