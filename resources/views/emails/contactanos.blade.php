<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        h1{
            text-align: center;
            background-color: #000;
            color:rgb(157, 255, 0)
        }
        p{
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <h1>Mensaje de contacto</h1>
    <p>Envio de correo desde Laravel 10</p>

    <table width="100%">
        <tr>
            <th>Nombre</th>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <th>Correo</th>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <th>Mensaje</th>
            <td>{{ $data['message'] }}</td>
        </tr>
    </table>
</body>
</html>