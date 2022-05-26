<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
    <title>Registro</title>
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form>
            <h1 class="h3 mb-3 fw-normal">Ingresa tus datos</h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" autocomplete="username" placeholder="E-mail">
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" autocomplete="current-password" placeholder="Contraseña">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
        </form>
    </main>

    <h2>Ajax</h2>
    <ol id="xhr"></ol>
    <script src="{{ asset("js/ajax.js") }}"></script>
</body>
</html>