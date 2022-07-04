<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>alibobo</title>
    <style>
        /* header  */
        #header {
            display: flex;
            align-items: center;
            background-color: #ddd;
            padding: 1rem;
        }

        #header nav {
            width: 70%;
        }

        #header nav ul {
            display: flex;
            justify-content: space-between;
        }

        #header nav ul li {
            list-style: none;
        }

        #header nav ul li a {
            text-decoration: none;
            color: #000;
        }

        /* main */
        main {
            background-color: #000;
            color: #fff;
            padding: 3rem;

        }

        #main {
            text-align: center;
            margin-bottom: 5rem;
        }

        #container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #container div {
            background-color: #fff;
            padding: 1rem;
            border-radius: 20%;
        }


        /* image cool  */

        /* a {
            position: absolute;
            bottom: 20px;
            right: 20px;
        } */

        svg {
            height: 200px;
            /* position: absolute; */
            top: 50%;
            left: 50%;
            /* transform: translate(-50%, -50%); */
            border-radius: 20px;
            border: 20px solid #333;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        /* .f {
            stroke-dasharray: 2520;
            stroke-dashoffset: 2520;
            animation: dash 30s linear infinite;
        }

        @keyframes dash {
            100% {
                stroke-dashoffset: 0;
            }
        } */
    </style>
</head>

<body>
    <header id="header">
        <h1>header</h1>
        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=articles">Articles</a></li>
                <li><a href="index.php?page=inscription">Inscription</a></li>
                <li><a href="index.php?page=login">Login</a></li>

            </ul>
        </nav>
    </header>