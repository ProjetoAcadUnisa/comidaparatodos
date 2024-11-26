<?php
// Conexão com o banco de dados
include 'config.php'; // Inclua o arquivo de conexão com o banco

// Consulta para pegar os pontos de apoio
$sql = "SELECT estado, cidade, nome_time, link_grupo FROM pontodeapoio";
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
            width: 70%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .whatsapp-link {
            display: inline-block;
            background-color: #25D366;
            padding: 8px 16px;
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

    <h2>Seja um Voluntário</h2>
        <table id="pontosApoioTable">
            <thead>
                <tr>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Time</th>
                    <th>Contato</th>

                </tr>
            </thead>


        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Exibe os dados da tabela
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['estado']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['cidade']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nome_time']) . "</td>";
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
