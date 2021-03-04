<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="CSS/diseño_calculadora.css">
    <title>Calculadora</title>
</head>
<body>

    <div id="back">
        <div id="interfaz">
            <div id="calt">
                <div id="name">
                    <h1>¡¡Calculadora!!</h1>
                </div> 
                <div id="form">
                    <form method="POST" action="Home_calculadora.php" autocomplete="off">
                        <input type="text" name="num1" id="number1" placeholder="Primer numero"> <br>
                        <div id="select">
                            <select name="valores" id="valor">
                                <option value="0">Sumar</option>
                                <option value="1">Restar</option>
                                <option value="2">Multiplicar</option>
                                <option value="3">Dividir</option>
                                </select> <br>
                        </div>
                        <input type="text" name="num2" id="number2" placeholder="Segundo numero"> <br> <br>
                        <button class="btn btn-primary" type="submit" id="enviar" name="calcular">Calcular</button>
                    </form>
                </div>
                <p id="result">
                    <?php
                        include("calculo.php");
                    ?> 
                </p>
            </div>
        </div>
    </div>

    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>