<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- CSS del login -->
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>

    <div class="login-page">

        <div class="login-box">

            <div class="card">

                <div class="card-header">
                    <h1>KAJEKY</h1>
                </div>

                <div class="login-card-body">

                    <p class="login-box-msg">Ingrese sus credenciales</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- EMAIL -->
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Correo"
                            required
                        >

                        <!-- PASSWORD -->
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Contraseña"
                            required
                        >

                        <button type="submit" class="btn btn-primary">
                            ACCEDER
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>

</body>
</html>
