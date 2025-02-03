<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found - Google</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            border: 1px solid #dcdcdc;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 48px;
            color: #d93025;
            margin: 0;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-top: 8px;
        }

        .search-box {
            margin-top: 30px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 24px;
            border: 1px solid #dcdcdc;
            outline: none;
        }

        input[type="text"]:focus {
            border: 1px solid #4285f4;
        }

        .footer {
            margin-top: 50px;
            font-size: 14px;
            color: #555;
        }

        .footer a {
            color: #4285f4;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>404</h1>
        <p>Page non trouvée. Désolé, nous ne pouvons pas trouver la page que vous cherchez.</p>

        <div class="search-box">
            <input type="text" placeholder="Rechercher sur Google..." />
        </div>

        <div class="footer">
            <p>Suggestions :</p>
            <p><a href="/">Retour à la page d'accueil</a> ou <a href="https://www.google.com">Rechercher sur Google</a>.</p>
        </div>
    </div>

</body>

</html>