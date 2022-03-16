<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5d7c26c4ce.js" crossorigin="anonymous"></script>
    <!-- Top Icon -->
    <!-- <i class="fa-solid fa-car-garage"></i> -->
    <title>Loja de Veículos</title>
    
</head>

<body>
    <style>
        body,
        ul,
        li,
        p {
            margin: 0px;
            padding: 0px;
            list-style: none;
            font-size: 1.2rem;
            font-family: 'Hubballi', cursive;
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
        input{
            margin-bottom: 5px;
        }
        #header{
            margin-right: 5%;
        }
        h1{
            margin-bottom: 10px;
        }
        body{
            background-color: #f0f8ff;
            font-size: 1.2em;
            color: #59429d;
            justify-content: center;
            align-content: center;
            font-family: 'Hubballi', cursive;
            
        }
        #body {
            margin-top: 5%;
            font-family: 'Hubballi', cursive;
        } 
        button{
            border-radius: 5%;
            font-family: sans-serif;
            font-size: 1em;
            color: #59429d;
        }
        #button:hover{
            background: #ccbbff;
            box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
            text-shadow: none;
        }

        #button, select{
            cursor: pointer;
        }
        #button{
            margin-left: 8.5%;
            margin-top: 2%;
        }
        #main{
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
<!-- -->
<!-- <div id="main">
    <a href="cadastro.php"> <button id="button">Cadastro</button></a>
</div> -->
