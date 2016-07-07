
    <style>
        pre{
            color: darkslategrey;
            font-family: sans-serif;
            font-size: 25px;
        }
    </style>

    <body>

        <h1>Email de Contato</h1>

        <p>O usuário (a) <strong>{{ $nome }}</strong> envio a sequinte mensagem: </p>

        <pre>{{ $descricao }}</pre>

        <p><a href="malto::{{ $email }}">Clique para responder</a></p>

    </body>