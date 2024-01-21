<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
</head>
<body>

    <h2>Informações de Contato</h2>

    <p><strong>Nome:</strong> {{ $data['fromName'] }} {{ $data['fromSurname'] }}</p>
    <p><strong>Email:</strong> {{ $data['fromEmail'] }}</p>
    <p><strong>Telefone:</strong> {{ $data['fromCell'] }}</p>

    <h3>Mensagem:</h3>
    <p>{{ $data['message'] }}</p>

</body>
</html>
