<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contribua de diversas formas</title>

    <style>

        * {
            box-sizing: border-box; /* Aplica box-sizing em todos os elementos */
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            padding: 20px; /* Espaçamento geral */
        }

        .container {
            text-align: center;
            max-width: 800px;
            width: 100%;
        }

        h1 {
            margin-bottom: 40px;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .btn {
            padding: 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .form-container {
            display: none;
            padding: 30px;  /* Aumentei o padding */
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container.active {
            display: block;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 12px 20px;  /* Ajustando o padding */
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Garante que o padding não afete a largura */
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        table {
            width: 100%;
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

<div class="container">
    <h1>Bem-vindo!!!</h1>

    <!-- Botões principais -->
    <div class="buttons">
        <button class="btn" onclick="showForm('receberAlimentos')">Receber Alimentos</button>
        <button class="btn" onclick="window.location.href='http://localhost/p2/seja_voluntario.php'">Seja um Voluntário</button>
        <button class="btn" onclick="showForm('sejaPontoDeApoio')">Seja um Ponto de Apoio</button>
        <button class="btn" onclick="window.location.href='http://localhost/p2/fazer_doacao.php'">Fazer Doação</button>
        <button class="btn" onclick="showForm('encontrepessoas')">Ajudar Pessoas 🧡</button>
    </div>


    
    <!-- Cadastro para receber alimentos-->
<div id="receberAlimentos" class="form-container">
    <h2>Receber Alimentos</h2>
    <form method="POST" action="receber_alimentos.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="endereco_estado">Endereço completo:</label>
        <input type="text" id="endereco_estado" name="endereco_estado" placeholder="Estado" required>
        <input type="text" id="endereco_cidade" name="endereco_cidade" placeholder="Cidade" required>
        <input type="text" id="endereco_bairro" name="endereco_bairro" placeholder="Bairro" required>
        <input type="text" id="endereco_rua" name="endereco_rua" placeholder="Rua" required>
        <input type="text" id="endereco_numero" name="endereco_numero" placeholder="Número" required>

        <label for="qtdpessoas">Quantas pessoas moram com você?</label>
        <input type="number" id="qtdpessoas" name="qtdpessoas" required>

        <label for="localizacao">Nos conte um pouco sobre o seu momento:</label>
        <input type="text" id="localizacao" name="localizacao" required>

        <label for="contato_telefone">Telefone de contato:</label>
        <input type="tel" id="contato_telefone" name="contato_telefone" required>

        <button type="submit">Enviar</button>
    </form>
</div>


    <!-- Listando os locais pra Seja um Voluntário-->
    <div id="sejaVoluntario" class="form-container">
        <h2>Seja um Voluntário</h2>
        <table id="pontosApoioTable">
            <thead>
                <tr>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Bairro</th>
                    <th>Time</th>
                    <th>Contato</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SP</td>
                    <td>São Paulo</td>
                    <td>Centro</td>
                    <td>Time 1</td>
                    <td><a class="whatsapp-link" href="https://wa.me/5511999999999">WhatsApp</a></td>
                </tr>
                <tr>
                    <td>RJ</td>
                    <td>Rio de Janeiro</td>
                    <td>Copacabana</td>
                    <td>Time 2</td>
                    <td><a class="whatsapp-link" href="https://wa.me/5521999999999">WhatsApp</a></td>
                </tr>
                <tr>
                    <td>MG</td>
                    <td>Belo Horizonte</td>
                    <td>Funcionários</td>
                    <td>Time 3</td>
                    <td><a class="whatsapp-link" href="https://wa.me/5531999999999">WhatsApp</a></td>
                </tr>
            </tbody>
        </table>
    </div>



    <!-- Formulario de cadastro Seja um Ponto de Apoio-->
    <div id="sejaPontoDeApoio" class="form-container">
    <h2>Seja um Ponto de Apoio</h2>
    <form method="POST" action="seja_ponto_apoio.php">
        <label for="nomeLocal">Nome do Local:</label>
        <input type="text" id="nomeLocal" name="nomeLocal" required>

        <label for="responsavel">Responsável:</label>
        <input type="text" id="responsavel" name="responsavel" required>

        <label for="endereco_estado">Endereço completo:</label>
        <input type="text" id="endereco_estado" name="endereco_estado" placeholder="Estado" required>
        <input type="text" id="endereco_cidade" name="endereco_cidade" placeholder="Cidade" required>
        <input type="text" id="endereco_bairro" name="endereco_bairro" placeholder="Bairro" required>
        <input type="text" id="endereco_rua" name="endereco_rua" placeholder="Rua" required>
        <input type="text" id="endereco_numero" name="endereco_numero" placeholder="Número" required>

        <label for="contato-responsavel">Contato do Responsável:</label>
        <input type="tel" id="contato-responsavel" name="contato-responsavel" placeholder="Número de telefone ou e-mail" required>

        <label for="nomeTime">Dê um Nome ao Time:</label>
        <input type="text" id="nomeTime" name="nomeTime">

        <label for="link">Link do grupo WhatsApp/Telegram do Time:</label>
        <input type="url" id="link" name="link" required>

        <button type="submit">Enviar</button>
    </form>
    </div>



<!-- Listando os locais de ponto de apoio-->
    <div id="fazerDonacao" class="form-container">
        <h2>Estes são pontos de apoio que você pode levar sua doação:</h2>
        <table id="pontosApoioTable">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Endereço</th>
                    <th>Contato</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Obra Social São João</td>
                    <td>Rua Otávio Josias de Águia, nº 580, JD. São Cristóvão, São Paulo</td>
                    <td>(19) 95317-5962</td>
                </tr>
            </tbody>
        </table>
    </div>



<!-- Listando Ajudar Pessoas-->
    <div id="encontrepessoas" class="form-container">
        <h2>Baixe a lista atualizada: </h2>
        <table id="pontosApoioTable">
            <thead>
                <tr>
                    <th>Detalhes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="http://localhost/p2/ajudar_pessoas.php">Baixe a lista atualizada de pessoas que contam com sua ajuda</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>



<!-- script para exibir as paginas-->
<script>
    // Função para alternar entre os formulários
    function showForm(formId) {
        // Ocultar todos os formulários
        document.querySelectorAll('.form-container').forEach(form => form.classList.remove('active'));
        
        // Mostrar o formulário correto
        document.getElementById(formId).classList.add('active');
    }
</script>




</body>
</html>
