<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressão de Ministérios</title>
    <style>
        /* Estilos globais */
        body {
            font-family: Arial, sans-serif;
            background-image: url('/img/img-1.jpg'); /* Substitua pelo caminho da imagem desejada */
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }
        .overlay {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        caption {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .print-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .print-button:hover {
            background-color: #0056b3;
        }
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 10px;
            }
            th, td {
                padding: 5px;
            }
            .print-button {
                width: 100%;
                margin-top: 10px;
            }
        }
        @media print {
            .print-button {
                display: none;
            }
            body {
                background: none;
            }
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="container">
            @foreach($ministeriosAgrupados as $selecioneMinisterio => $ministerios)
            <div class="ministry-group" id="group-{{ $loop->index }}">
                <button onclick="printGroup('group-{{ $loop->index }}')" class="btn btn-primary print-button">Imprimir {{ $selecioneMinisterio }}</button>
                <table>
                    <caption>Ministério: {{ $selecioneMinisterio }}</caption>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Contacto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ministerios as $ministerio)
                        <tr>
                            <td>{{ $ministerio->id }}</td>
                            <td>{{ $ministerio->nome }}</td>
                            <td>{{ $ministerio->apelido }}</td>
                            <td>{{ $ministerio->contacto }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endforeach
            <button onclick="printAll()" class="btn btn-primary print-button">Imprimir Todos os Ministérios</button>
        </div>
    </div>

    <script>
        function printGroup(groupId) {
            var originalContent = document.body.innerHTML;
            var printContent = document.getElementById(groupId).innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }

        function printAll() {
            window.print();
        }
    </script>
</body>
</html>
