    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post_PHP</title>
        <link rel="stylesheet" href="./assets/css/post_php.css">
        <link rel="icon" type="image/png" href="./assets/icones/PHP_Logo.png">
    </head>
    <body>
        
    <div class="container">
        <form action="./assets/paginas/exibir-informacoes.php" class="formulario" method="post">
            <p>Envie uma mensagem preenchendo o formulário abaixo.</p>

            <div class="BoxInput">
                <label for="nome">Seu nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="BoxInput">
                <label for="nome">Seu telefone:</label>
                <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
            </div>
            <div class="BoxInput">
                <label for="nome">Seu E-Mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu E-Mail" required>
            </div>
            <div class="BoxInput radiobox">
                <span>Deseja receber nossas novidades?</span>
                <input type="radio" id="sim" name="novidades" value="sim" checked><label for="sim">Sim</label>
                <input type="radio" id="nao" name="novidades" value="nao" checked><label for="nao">Não</label>
            </div>
            <div class="BoxInput">
                <label for="mensagem">Sua mensagem: </label>
                <textarea id="mensagem" name="mensagem" placeholder="Mensagem" required></textarea>
            </div>
            <input type="submit" name="acao" value="Enviar">
            
        </form>       
    </div>
        
    </body>
    </html>