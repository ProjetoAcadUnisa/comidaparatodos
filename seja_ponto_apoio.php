<?php
// Incluir o arquivo de configuração para conexão com o banco de dados
include 'config.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nomelocal = $conn->real_escape_string($_POST['nomeLocal']);
    $responsavel = $conn->real_escape_string($_POST['responsavel']);
    $estado = $conn->real_escape_string($_POST['endereco_estado']);
    $cidade = $conn->real_escape_string($_POST['endereco_cidade']);
    $bairro = $conn->real_escape_string($_POST['endereco_bairro']);
    $rua = $conn->real_escape_string($_POST['endereco_rua']);
    $numero = $conn->real_escape_string($_POST['endereco_numero']);
    $contato_responsavel = $conn->real_escape_string($_POST['contato-responsavel']);
    $nomeTime = $conn->real_escape_string($_POST['nomeTime']);
    $link = $conn->real_escape_string($_POST['link']);

    // Preparar a consulta SQL para inserir os dados na tabela PontoDeApoio
    $sql = "INSERT INTO PontoDeApoio (nomelocal, nomeresponsavel, estado, cidade, nome_time, contato, link_grupo)
            VALUES ('$nomelocal', '$responsavel', '$estado', '$cidade', '$nomeTime', '$contato_responsavel', '$link')";

if ($conn->query($sql) === TRUE) {
    // Mensagem de sucesso e redirecionamento para a página inicial
    echo " <script>
        // Exibe a mensagem de sucesso
        alert('Cadastro realizado com sucesso!');

        // Limpa os campos do formulário
        var form = document.querySelector('form');
        if (form) {
            form.reset();
        }

        // Redireciona para a página inicial após limpar o formulário
        setTimeout(function() {
            window.location.href = 'http://localhost/p2/formularios.php'; // Coloque a URL da sua página inicial aqui
        }, 100); // Aguarda 1 segundo antes de redirecionar
    </script>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

    // Fechar a conexão
    $conn->close();
}
?>
