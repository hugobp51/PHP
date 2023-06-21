<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Primeiro ProjetoWeb UNIPE</title>
    <style>
        h1{
            padding: 0;
            margin: 0;
        }

        body{
            text-align: center;
            align-items: center;
            background-color:rgb(212, 238, 229);
        
        }

        .campo label{
            display: block;
            margin-bottom: 0.4em;
        }
       
    </style>
</head>
<body>
    <header>
        <h1>Entrevista de Estágio</h1><hr>
        <h2><b>Primeira Etapa</b></h2>
        <p><i>Complete os dados</i></p>
        <br>
    </header>
        <form action="testetrabalho.php" method="POST">
            <div class="campo">
                <label><strong>Nome</strong></label>
                <input type="text" name="nome" required><br><br>
                
                <label><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" required>
            </div><br>
            
            <div class="campo">

                <label><strong>Data de Nascimento</strong></label>
                 <input type="date" name="date" required><br><br>

                <label><strong>Email</strong></label>
                 <input type="email" name="email" required>
  
            </div>

            <div class="campo"><br>
                <label><strong>Qual trilha você pretende seguir?</strong></label><br><br>
                <label>
                    <input type="radio" name="web" value="frontend">Front-end
                </label>
                <label>
                    <input type="radio" name="web" value="backend">Back-end
                </label>
                <label>
                    <input type="radio" name="web" value="fullstack">Fullstack
                </label>
            </div>

             <div><br>
                <label><strong> Qual das opções abaixo você tem conhecimento?</strong></label><br><br>
                <input type="checkbox" name="tecnologia1"  value="HTML">
                <label for="tecnologia1">HTML</label>
                <input type="checkbox" name="tecnologia2"  value="CSS">
                <label for="tecnologia2">CSS</label>
                <input type="checkbox" name="tecnologia3"  value="JavaScript">
                <label for="tecnologia3">JavaScript</label>
                <input type="checkbox" name="tecnologia4"  value="Java">
                <label for="tecnologia4">Java</label>
                <input type="checkbox" name="tecnologia5"  value="PHP">
                <label for="tecnologia5">PHP</label>
                <input type="checkbox" name="tecnologia6"  value="C">
                <label for="tecnologia6">C</label>
            </div>
            
            <div class="campo"><br>
                <label><strong>Com base na sua experiência, qual nível abaixo lhe adequa?</strong></label><br><br>
                <select required>
                     <option selected disabled value="">Selecione</option>
                    <option>Júnior</option>
                    <option>Pleno</option>
                       <option>Sênior</option>
                </select>
            </div>

            <div class="campo"><br>
                <label><strong>Conte um pouco da sua experiência:</strong></label><br><br>
                <textarea rows="6" style="width: 30em"  name="experiencia" placeholder="Digite aqui"></textarea>
            </div><br>

            <button class="botao" type="submit" onsubmit="">Concluído</button>
        </form><br>
        <div>
            <ul><hr><br>
                <li class="contato">
                    <a href="https://www.linkedin.com"target="_blank">LinkedIn</a>
                </li>
                <li class="contato">
                    <a href="https://github.com"target="_blank">GitHub</a>
                </li>
            </ul>
        </div><br><hr><br>      
        <footer>
            <ol>
                <li>
                    <h3>Feito por: Hugo, Abner, Matheus Lima.</h3>
                </li>
            </ol>
        </footer> 
</body>
</html>