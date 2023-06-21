<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        h1{
            font-size: 20pt;
            color: black;
            text-shadow: 1px 1px 1px;
        }

        h2{
            font-size: 17pt;  
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste 2 php</title>
</head>
<body>

    <form action='teste2.php' method="get">
   
    <h1><fieldset>
    Qual sua cor preferida: <input type="text" name="cor" placeholder="insira a cor" required/> </fieldset><br> <fieldset><hr>
    <h2>
        Qual seu console de preferência:
    </h2>
    
    <select required name="game">
        <option selected disabled value=''>Selecione</option>
        <option value="xbox"> xbox </option>
        <option value="play"> play</option>
        <option value="nintendo">nintendo</option>
    </select><hr>
    <input type="submit" value="Enviar"/>
    </fieldset>
    </h1>
    </form> 

</body>
</html>