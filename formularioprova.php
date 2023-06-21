<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Prova Formulario</title>

</head>
<body>
<fieldset>
<form action="formularioprovaenvio.php" method="post">
<h1><b>Formulário de inscrição</b></h1><hr>
<label><strong>Preencha seus dados</strong></label><br><br>

<label><strong>Nome</strong></label>

<input type="text" name="nome" placeholder="Nome" required><br><br>

<label><strong>Sobrenome</strong></label>
<input type="text" name="sobrenome" placeholder="Sobrenome" required><br><br>

<label><strong>Email</strong></label>
<input type="email" name="email" placeholder="Digite seu email" required><br><br>

<label><strong>Endereço</strong></label>
<input type="text" name="end" placeholder="Endereço" required><br><br>

<label><strong>Cidade</strong></label>
<input type="text" name="cidade" required placeholder="Cidade"><br><br>

<label><strong>Telefone para contato + DDD</strong></label>
<input type="text" name="ddd" required placeholder="DDD" size=2px>
<input type="text" name="fone" required placeholder="Número de telefone"><br><br>

<label><strong>Usuário</strong></label>
<input type="text" name="user" required placeholder="Nome de usuário"><br><br>

<label><strong>Senha</strong></label>
<input type="password" name="senha" required placeholder="Senha"><br><br><hr>

<input type="submit" value="Finalizar minha inscrição">


</form>
</fieldset>

    
</body>
</html>