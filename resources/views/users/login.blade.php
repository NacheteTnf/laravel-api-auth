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
    <p>No tiene cuenta? <button><a href="/users/register">Registrarse</a></button></p>
    <h2>Login</h2>
    <div>
        <form action="/users/login/" method="POST">
            @csrf
            <label>Email:</label>
            <input type="email" name="email" placeholder="Su Email" required>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Su Contraseña" required>
            <input type="submit" value="Iniciar Sesion">
        </form>
    </div>
</body>

</html>