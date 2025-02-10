<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Laravel</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        
        body {
            background-color:rgb(15, 12, 12);
            font-family: 'Arial', sans-serif;
            color: #333;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow: hidden;
        }

        
        .container {
            text-align: center;
            background: rgb(78, 72, 72);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
        }

        
        .title {
            font-size: 3rem;
            font-weight: 700;
            color: rgb(253, 8, 8);
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        
        .description {
            font-size: 1.2rem;
            color: white;
            margin-bottom: 40px;
            line-height: 1.5;
        }

        
        .btn {
            background-color: rgb(253, 8, 8);
            color: white;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        
        .btn:hover {
            background-color: rgb(253, 8, 8);
            transform: scale(1.05);
        }

        
        .footer {
            margin-top: 40px;
            font-size: 1rem;
            color: #aaa;
        }

        .footer a {
            color:rgb(253, 8, 8);
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            color:rgb(253, 8, 8);
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="title">¡Bienvenido a Laravel!</h1>
        <p class="description">Laravel es un framework PHP elegante y expresivo. Empezar tu proyecto con Laravel nunca fue tan fácil. ¡Comencemos esta increíble aventura de desarrollo web!</p>
        <a href="#!" class="btn">Empezar ahora</a>
    </div>

    <div class="footer">
        <p>Desarrollado con <span style="color: red;">♥</span> por la comunidad de Laravel</p>
        <p><a href="https://laravel.com" target="_blank">Visita Laravel.com</a></p>
    </div>

</body>

</html>
