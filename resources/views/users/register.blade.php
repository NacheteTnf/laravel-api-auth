<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }
        a{
            text-decoration: none;
            color: black;
        }

        input[type=password],
        input[type=text],
        input[type=email],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>
    <p>Ya tiene cuenta? <button><a href="/users/login">Iniciar Sesion</a></button> </p>
    <h2>Register</h2>
    <br>
    <div>
        <form action="/users/register/" method="POST" name="formRegister">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="name" placeholder="Su Nombre" required>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Su Email" required>
            <label>Password:</label>
            <input type="password" name="password" id="password" placeholder="Su Contraseña" required>
            <label>Confirme su Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repita Su Contraseña" required>
            <input type="submit" value="Registrarse" onclick="comprobarClave()">
        </form>
    </div>
</body>
    <script>
        function comprobarClave() {
            password = document.formRegister.password.value
            password_confirmation = document.formRegister.password_confirmation.value

            if (password !== password_confirmation) {
                alert("Las Passwords tienen que ser iguales!")
            }else{
                document.formRegister.submit()
            }
        }
    </script>
</html>