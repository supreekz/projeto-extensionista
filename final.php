<?php
header('Content-Type: text/html; charset=utf-8');
if(isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];

    $stmt = $conexao->prepare("INSERT INTO informacoes (nome, idade, genero) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $nome, $idade, $genero);

    if ($stmt->execute()) {
        echo "";
    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">  
    <title>QuestionÃ¡rio de Perfil de Investimento</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>QuestionÃ¡rio de Perfil de Investimento</h1>
        </div>
    </header>

    <div class="container">
        <div class="description">
            <p>Responda as perguntas abaixo para descobrir seu perfil de investimento.</p>
        </div>

        <form id="questionario" action="processamento.php" method="POST"> 

            <div class="form-group">
            <span>VocÃª estÃ¡ disposto a correr o risco de perder parte ou todo o seu investimento em troca de potenciais retornos mais altos?</span>
                <input type="radio" name="q1" value="sim" id="q1_sim">
                <label for="q1_sim">Sim</label>
                <input type="radio" name="q1" value="nao" id="q1_nao">
                <label for="q1_nao">NÃ£o</label>
            </div>

            <div class="form-group">
            <span>VocÃª tem um horizonte de investimento de pelo menos cinco anos?</span>
                <input type="radio" name="q2" value="sim" id="q2_sim">
                <label for="q2_sim">Sim</label>
                <input type="radio" name="q2" value="nao" id="q2_nao">
                <label for="q2_nao">NÃ£o</label>
            </div>

            <div class="form-group">
            <span>VocÃª se sente confortÃ¡vel com a ideia de investir em ativos volÃ¡teis, como aÃ§Ãµes ou criptomoedas?</span>
                <input type="radio" name="q3" value="sim" id="q3_sim">
                <label for="q3_sim">Sim</label>
                <input type="radio" name="q3" value="nao" id="q3_nao">
                <label for="q3_nao">NÃ£o</label>
            </div>

            <div class="form-group">
            <span>VocÃª tem um fundo de emergÃªncia suficiente para cobrir despesas inesperadas antes de comeÃ§ar a investir?</span>
                <input type="radio" name="q4" value="sim" id="q4_sim">
                <label for="q4_sim">Sim</label>
                <input type="radio" name="q4" value="nao" id="q4_nao">
                <label for="q4_nao">NÃ£o</label>
            </div>

            <div class="form-group">
            <span>VocÃª estÃ¡ disposto a aprender sobre diferentes tipos de investimentos e estratÃ©gias de investimento?</span>
                <input type="radio" name="q5" value="sim" id="q5_sim">
                <label for="q5_sim">Sim</label>
                <input type="radio" name="q5" value="nao" id="q5_nao">
                <label for="q5_nao">NÃ£o</label>
            </div>

            <div class="form-group">
            <span>VocÃª estÃ¡ interessado em investir em empresas menores ou em setores mais arriscados, com potencial de crescimento significativo?</span>
                <input type="radio" name="q6" value="sim" id="q6_sim">
                <label for="q6_sim">Sim</label>
                <input type="radio" name="q6" value="nao" id="q6_nao">
                <label for="q6_nao">NÃ£o</label>
            </div>

            <div class="form-group">
            <span>VocÃª prefere investir em ativos que oferecem retornos estÃ¡veis, mesmo que isso signifique retornos mais baixos a longo prazo?</span>
                <input type="radio" name="q7" value="sim" id="q7_sim">
                <label for="q7_sim">Sim</label>
                <input type="radio" name="q7" value="nao" id="q7_nao">
                <label for="q7_nao">NÃ£o</label>
            </div>

            <div class="form-group">
            <span>VocÃª estÃ¡ disposto a dedicar tempo regularmente para monitorar e ajustar seus investimentos, se necessÃ¡rio?</span>
                <input type="radio" name="q8" value="sim" id="q8_sim">
                <label for="q8_sim">Sim</label>
                <input type="radio" name="q8" value="nao" id="q8_nao">
                <label for="q8_nao">NÃ£o</label>
            </div>

            <div class="form-group">
            <span>VocÃª prefere evitar riscos e priorizar a preservaÃ§Ã£o do capital, mesmo que isso signifique retornos mais modestos?</span>
                <input type="radio" name="q9" value="sim" id="q9_sim">
                <label for="q9_sim">Sim</label>
                <input type="radio" name="q9" value="nao" id="q9_nao">
                <label for="q9_nao">NÃ£o</label>
            </div>

            <div class="form-group">
            <span>VocÃª estÃ¡ confortÃ¡vel com a ideia de investir em ativos que podem ser difÃ­ceis de liquidar rapidamente, como imÃ³veis ou investimentos alternativos?</span>
                <input type="radio" name="q10" value="sim" id="q10_sim">
                <label for="q10_sim">Sim</label>
                <input type="radio" name="q10" value="nao" id="q10_nao">
                <label for="q10_nao">NÃ£o</label>
            </div>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 - Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#questionario').submit(function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'processamento.php',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response){
                    window.location.href = response.redirect;
                },
                error: function(xhr, status, error){
                    alert('Erro ao processar as respostas: ' + error);
                }
            });
        });
    });
</script>
</body>
</html>	