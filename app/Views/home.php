<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <title>NAV BAR</title>
</head>

<body>
    <style>
        * {
            font-family: 'Hubballi', cursive;
        }
        body,
        ul,
        li,
        p {
            margin: 0px;
            padding: 0px;
            list-style: none;
            font-size: 1.2rem;
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .header {
            /*espaço entre os itens */
            /*tela pequena, flex-box vai para baixo*/
            background-color: #7159c1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .footer {
            background-color: #7159c1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-top: 30%;
        }

        .menu {
            display: flex;

        }

        .menu li {
            margin-left: 10px;

        }

        .menu li a {
            /* para a não se mover */
            display: block;
            padding: 10px;
        }
    </style>
