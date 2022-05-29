<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Registro</title>
</head>
<body>
    <main>
        <form action="/register" method="POST">
            @csrf
            <h1>Ingresa tus datos</h1>
            <div id="emailField">
                <input type="email" id="emailInput" autocomplete="username" placeholder="E-mail">
            </div>
            <div>
                <input type="password" id="passwordInput" autocomplete="current-password" placeholder="Contraseña">
            </div>
            <input id="registerButton" type="submit" value="Registrarse">
        </form>
    </main><br>
    <h2>Direcciones ya registradas recuperadas con Ajax</h2>
    <ol id="fetch"></ol>
    <script src="{{ asset("js/ajax.js") }}"></script>
</body>
</html>