<?php
// Conexão com o banco de dados
include 'config.php'; // Inclua o arquivo de conexão com o banco

// Consulta para pegar os pontos de apoio
$sql = "SELECT nomeLocal, contato, link_grupo FROM pontodeapoio";
$result = $conn->query($sql);

// Fechar a conexão ao final
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontos de Apoio - Fazer Doação</title>

    <style>
        /* Estilos do conteúdo */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }

        thead tr th{
            padding: 8px;
            background-color: #C0C0C0;
        }
    
        th, td {
            padding: 3px;
            text-align: left;
        }
        .whatsapp-link {
            display: inline-block;
            background-color: #25D366;
            padding: 8px 8px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
        .whatsapp-link:hover {
            background-color: #128C7E;
        }
    </style>



</head>
<body>

    <h1>Pontos de Apoio para Doação</h1>
    <p>Abaixo estão os pontos de apoio para você realizar sua doação:</p>

    <table>
        <thead>
            <tr>
                <th>Nome do Local</th>
                <th>Endereço</th>
                <th>Contato</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Exibe os dados da tabela
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['nomeLocal']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['contato']) . "</td>";
                    echo "<td><a href='" . htmlspecialchars($row['link_grupo']) . "' class='whatsapp-link'>WhatsApp</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum ponto de apoio encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Link para voltar para a página principal -->
    <br>
    <a href="http://localhost/p2/formularios.php" class="whatsapp-link">Voltar</a>

</body>
</html>
