<?php
// Incluir o arquivo de configuração para conexão com o banco de dados
include 'config.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = $conn->real_escape_string($_POST['nome']);
    $estado = $conn->real_escape_string($_POST['endereco_estado']);
    $cidade = $conn->real_escape_string($_POST['endereco_cidade']);
    $bairro = $conn->real_escape_string($_POST['endereco_bairro']);
    $rua = $conn->real_escape_string($_POST['endereco_rua']);
    $numero = $conn->real_escape_string($_POST['endereco_numero']);
    $qtdpessoas = (int)$_POST['qtdpessoas'];
    $localizacao = $conn->real_escape_string($_POST['localizacao']);
    $contato_telefone = $conn->real_escape_string($_POST['contato_telefone']);

    // Preparar a consulta SQL para inserir os dados na tabela ReceberAlimentos
    $sql = "INSERT INTO ReceberAlimentos (nome, estado, cidade, bairro, rua, numero, qtd_pessoas, contesuahistoria, contato)
            VALUES ('$nome', '$estado', '$cidade', '$bairro', '$rua', '$numero', $qtdpessoas, '$localizacao', '$contato_telefone')";

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
