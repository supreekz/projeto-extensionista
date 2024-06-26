<?php
if(isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];

    $stmt = $conexao->prepare("INSERT INTO informacoes (nome, idade, genero) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $nome, $idade, $genero);

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">  
    <title>IA com mercado</title>
</head>

<body>
    <header>
        <div class="container header-content">
            <img src="https://i.imgur.com/M2Orp5Q.png" alt="Investe Aí" width='150px' height='150px'>
            <h1>Investe Aí</h1>
        </div>
    </header>

    <div class="container">
        <form action="final.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" min="0" required> 
            </div>       
            <div class="form-group">
                <label>Gênero:</label>
                <div class="radio-group">
                    <input type="radio" name="genero" id="male" value="male">
                    <label for="male">Masculino</label>
                    <input type="radio" name="genero" id="female" value="female">
                    <label for="female">Feminino</label>
                    <input type="radio" name="genero" id="none" value="none">
                    <label for="none">Prefiro não informar</label>
                </div>
            </div>
            <input type="submit" name="submit" value="Enviar">
        </form>

        <div class="description">
            <p><strong>Descubra</strong> seu perfil de investimento e veja conteúdos e opções interessantes <strong>que possam ajudar na sua vida financeira</strong>.</p>
            <p><small>Um projeto dos alunos Arthur, Guilherme, Marlon e Victor.</small></p>
        </div>
    </div>

    <div class="container">
        <section>
            <h2>O que é um investimento?</h2>
            <p>Investir é <strong>colocar dinheiro em algo que pode crescer ao longo do tempo para proporcionar retornos financeiros</strong>. Existem diferentes tipos de investimentos, como ações, títulos, imóveis, etc., cada um com seus benefícios e riscos próprios. Embora envolva sempre riscos, é possível alcançar objetivos em médio e longo prazo com <strong>educação e planejamento</strong>.</p>
        </section>
    </div>
    <br><br><br><br><br><br>

</body>
</html>