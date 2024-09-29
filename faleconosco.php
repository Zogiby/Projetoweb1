
<title> Meu Site </title>

<?php

include_once("template/topo.php");
include_once("template/menu.php");



@include_once("template/rodape.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0px;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin: 15px 0 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>

    <form action="?pg=texto" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>

        <label for="comentario">Comentário:</label>
        <textarea id="comentario" name="comentario" rows="5" required></textarea>

        <button type="submit">Enviar</button>
    </form>

</body>

