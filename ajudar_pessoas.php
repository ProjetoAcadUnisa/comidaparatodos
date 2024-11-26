<?php
// Incluir o arquivo de configuração para conexão com o banco de dados
include 'config.php';

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consultar os dados do banco de dados
$sql = "SELECT * FROM receberalimentos"; // Substitua 'sua_tabela' pelo nome da sua tabela
$result = $conn->query($sql);

// Verificar se há resultados
if ($result->num_rows > 0) {

echo "Arquivo de dados gerado com sucesso!";

    // Definir o nome do arquivo de texto
    $file = 'dados_banco.txt';

    // Abrir ou criar o arquivo para escrita
    $handle = fopen($file, 'w'); // 'w' abre para escrita (cria o arquivo se não existir)

    // Escrever um cabeçalho no arquivo de texto
   /* fwrite($handle, "ID;Nome;Endereco;Telefone\n"); // Você pode personalizar o cabeçalho conforme necessário*/

    fwrite($handle,"id;nome;estado;cidade;bairro;rua;numero;qtd_pessoas;contesuahistoria;contato\n");



    // Preencher os dados no arquivo de texto
    while ($row = $result->fetch_assoc()) {
        // Escrever os dados no arquivo, separando com tabulação (\t)
        /*fwrite($handle, $row['id_receber'] . "\t" . $row['nome'] . "\t" . $row['estado'] . "\n");*/
       /* fwrite($handle, $row['id_receber'] . ";" . $row['nome'] . ";" . $row['estado'] . "\n");*/
        fwrite($handle, $row['id_receber'] . ";" . $row['nome'] . ";" . $row['estado'] . ";"  .$row['cidade'] . ";"  .$row['bairro'] . ";"  .$row['rua']  . ";" .$row['numero']  . ";" .$row['qtd_pessoas'] . ";"  . $row['contesuahistoria'] . ";"  .$row['contato'] ."\n");
    }

    // Fechar o arquivo
    fclose($handle);

    // Informar ao usuário que o arquivo foi gerado
    echo "Arquivo de dados gerado com sucesso! <a href='$file' download> Baixar arquivo</a>";


    echo " <script>
    
    // Redireciona para a página inicial após limpar o formulário
    setTimeout(function() {
        window.location.href = 'http://localhost/p2/formularios.php'; // Coloque a URL da sua página inicial aqui
    }, 5500); // Aguarda 5,5 segundo antes de redirecionar
</script>";


}












else {
    echo "Nenhum dado encontrado!";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
