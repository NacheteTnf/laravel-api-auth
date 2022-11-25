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
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            height: 70px;
        }

        td {
            height: 30px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <a href="/alumnos">Ver listado de alumnos</a>
    <br>
    <h2>Ver alumno</h2>
    <div>
        <p> Nombre: {{ $alumno->nombre}}</p>
        <p> Apellido: {{ $alumno->apellido}}</p>
        <p> Edad: {{ $alumno->edad}}</p>
        <p> Dirección: {{ $alumno->direccion}}</p>
    </div>
</body>

</html>