<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Provas - Lab Soluctions</title>
    <?php require_once('./pages/default-pages/head-default.php'); ?>
    <link rel="stylesheet" href="css/style-login.css">
    
</head>
<body>
    <main class="mdl-grid container">
        <div id="modal" class="mdl-cell modal">
            <div id="images" class="mdl-grid box-login">
                    <img class="logo-media" src="src/imagens/logo-pitagoras.png" alt="Logo Faculdade Pitagoras">
            </div>
            <form id="inputs-login" action="">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label box-inputs">
                <input class="mdl-textfield__input" type="text" name="email-user" id="email-user">
                <label class="mdl-textfield__label" for="email-user">E-mail</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label box-inputs">
                <input class="mdl-textfield__input" type="password" name="pass-user" id="pass-user">
                <label class="mdl-textfield__label" for="pass-user">Senha</label>
            </div>
                <div id="act-buttons" class="mdl-grid box-acts-buttons">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                <strong>Logar</strong>
                        </button>
                </div>
            </form>
        </div>
    </main>
   
</body>
</html>