<?php
if(isset($_POST['submit']))
{
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //print_r($_POST['mensagem']);

    include_once('config.php');
   
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $mensagem= $_POST['mensagem'];

    $result=mysqli_query($conexao,"INSERT INTO formulariocontato (nome,email,mensagem)VALUES ('$nome','$email','$mensagem')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="shortcut icon" href="imagens/bater-papo.png" type="image/x-icon">
</head>
<body>
        <header>
                <nav>
                    <div class="logo">
                        <p>RR</p>
                    </div>
            
                    <ul class="listss">
                            <li><a href="index.html" class="changee">Home</a></li>
                        <li><a href="sobre.html"class="change">Sobre</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>Formulário de Contato</h1>
        
                <div class="formulario">
                    <form action="formulario.php" method="POST">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required><br><br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br><br>
                        <label for="mensagem">Mensagem:</label><br>
                        <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea><br><br>
                        <input type="submit" name="submit">
                    </form>
                </div>
            </main>
        
            <footer>
                <p class="logo-footer">RR</p>
                <p class="pp">&copy;Feito por Romário Ribeiro</p>
                <div class="icones">
                    <a href="https://www.instagram.com/romario.ribeiro.583/" target="_blank"class="footerlink"id="instagram">
                        <i class="fa-brands fa-instagram" style="color: #76107e;"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/romario-ribeiro-66733b256/" target="_blank"class="footerlink"id="linkedin">
                        <i class="fa-brands fa-linkedin" style="color: #5882ca;"></i>
                    </a>
                    <a class="github" href="https://github.com/settings/profile" target="_blank"class="footerlink"id="github">
        
                        <i class="fa-brands fa-github-alt" style="color: #edf2fd;"></i>
                    </a>
                </div>
            </footer>
    
        </body>
        </html>
</body>
</html>