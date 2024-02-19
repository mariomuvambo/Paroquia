<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feliz Aniversário!</title>
</head>
<body>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 20px; background-color: #f0f0f0;">
                <h1 style="margin: 0;">Feliz Aniversário!</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <p>Olá {{ $aniversariante->name }},</p>
                <p>Hoje é o seu dia especial! Desejamos a você um feliz aniversário cheio de alegria, saúde e sucesso.</p>
                <p>
                    <a href="https://example.com" style="background-color: #007bff; color: #ffffff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Visite nosso site</a>
                </p>
                <p>Obrigado,</p>
                <p>Paroquia Sao João Batista do Fomento</p>
            </td>
        </tr>
    </table>
</body>
</html>
