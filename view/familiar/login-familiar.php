<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANJOS PERDIDOS | Entre ou Cadastre-se</title>
    <link rel="icon" href="../prj-anjos-perdidos/img/logo.png">
    <link rel="stylesheet" href="../../assets/css/login-familiar.css">
</head>
<body>
   
    <header class="header"><!-- Começo - Cabeçalho -->
        <div class="navy-blue-form-header"></div><!--Começo & fim retângulo ciano, cabeçalho-->
        <div class="cien-form-header"></div><!--Começo & fim retângulo preto, cabeçalho-->
    </header><!-- Fim - Cabeçalho -->


    <div class="flex-container"> <!-- Começo flex-container, usado para alinhar e distribuir itens dentro de um espaço. -->
        <div class="container-sign-in"><!-- Divisão para metade da tela direita -->
            <div class="card-sign-in"><!-- Começo, card do login -->
                <div class="logo-name"><!-- Começo, logo e nome, card-login -->
                    <img src="../assets/logo-familiar.png" alt="logo">
                    <h1>Anjos Perdidos</h1>
                </div><!-- Fim, logo e nome, card-login -->
                <br>
                
                <div class="login-choice"><!-- Começo, tipo de login -->
                    <h3>Faça seu Login como</h3>
                    <h4><span>Familiar</span></h4>
                    <div class="or-container"><!-- Começo, container 'OU' -->
                        <div class="left-line-or"></div>
                        <h2>OU</h2>
                        <div class="right-line-or"></div>
                    </div><!-- Fim, container 'OU' -->
                    <div class="container-btns-choice">
                        <button class="btns-choice"><a href="../familiar/family-login.php">Usuário Comum</a></button>
                        <button class="btns-choice"><a href="../policial/form-login-policial.php">Autoridade</a></button>
                    </div>
                </div>
                
                <form method="post" action="./verifica-login-usuario.php"><!-- Começo, formulário de login -->
                    <div class="form-dates"><!-- Começo, input de dados no formulário -->
                        <input type="text" name="cpf" id="" placeholder="CPF">
                        <input type="password" name="senha" id="" placeholder="Senha">
                    </div><!-- Fim, entrada de dados -->
                    <br>
                    <br>
                    <div class="actions"><!-- Começo, ações de redirecionamento -->
                        <button class="sign-in" type="submit">Entrar na Conta!</button>
                        <div class="action-account">Não Possui uma conta? <a href="../usuarioComum/user-signup.php"> Criar Conta</a></div> 
                    </div><!-- Começo, ações de redirecionamento -->
                </form>
            </div><!-- Fim, card do login -->
        </div>
    </div><!--Fim flex-container-->


    <footer><!-- Começo - Rodapé -->
        <div class="navy-blue-form-footer"></div><!--Começo & fim retângulo ciano, rodapé-->
        <div class="cien-form-footer"></div><!--Começo & fim retângulo preto, rodapé-->
    </footer><!-- Fim - Rodapé -->
        
    
</body>
</html>