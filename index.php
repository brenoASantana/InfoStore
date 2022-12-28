<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Front/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="Front/CSS/button.css">
    <title>InfoStore</title>
    <meta charset="utf-8" />
</head>

<body>
    <div.banner>
        <img src="front/img/Firjan_Senai_logo.png" alt="FirjanSenailogo">
        <h1>Controle de Inventário</h1>
    </div.banner>
    <center>


        <h2>
            <div>
                <form method="POST" action="Entidades/O/CadUsuBack.php">
                    <label>Email:</label>
                    <input type="text" name="email" placeholder="email@senai.com"><br><br>
                    <label>Senha:</label>
                    <input type="text" name="senha">
            </div>
            <input type="submit" name="cadastrar" value="Cadastrar">
            <br><br>
            <a href="#" class="myButton">Não tem uma conta? Crie uma!</a>
        </h2>
    </center>

</body>

</html>