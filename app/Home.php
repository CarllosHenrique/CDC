<?php
session_start();

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Estudo/Cruds/CrudPhp/app/stylesheet/styleHome.css">

    <title>Crud de PHP</title>
</head>

<body>
    <header class="header">

        <button type="button"
            class="submit-button custom-text-font-manrope custom-text-color1 password-button-font-size">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-arrow-right-square display-svg" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
            </svg>
        </button>

    </header>

    <section class="container-fluid">

        <article class="item article-forms-general">
            <form class="forms-general" id="accountForm" method="POST">
                <span class="title-form custom-text-font-forum custom-text-color1">Alterar dados</span>
                <div class="label-float">
                    <input type="text" class="input-background" id="inputName" name="name" placeholder=" "
                        value="<?php echo $_SESSION['name'];?>" disabled>
                    <label for="#inputName" class="custom-text-font-forum custom-text-color5">Nome:</label>
                </div>

                <div class="label-float">
                    <input type="email" class="input-background" id="inputtEmail" name="email" placeholder=" "
                        value="<?php echo $_SESSION['email'];?>" disabled>
                    <label for="#inputEmail" class="custom-text-font-forum custom-text-color5">E-mail:</label>
                </div>
                <div class="display-none password-area">
                    <div class="label-float">
                        <input type="password" class="input-background" id="inputPass" name="password" placeholder=" ">
                        <label for="#inputPassword" class="custom-text-font-forum custom-text-color5">Senha
                            atual:</label>
                    </div>

                    <div class="label-float">
                        <input type="password" class="input-background" id="inputPass1" name="password1"
                            placeholder=" ">
                        <label for="#inputPassword" class="custom-text-font-forum custom-text-color5">Nova
                            senha:</label>
                    </div>

                    <div class="label-float">
                        <input type="password" class="input-background" id="inputPass2" name="password2"
                            placeholder=" ">
                        <label for="#inputPassword" class="custom-text-font-forum custom-text-color5">Repita a nova
                            senha:</label>
                    </div>
                </div>
                <div>
                    <a href="#" type="button"
                        class="show-hide-password display-none custom-button custom-text-font-manrope custom-text-color1 password-button-font-size show-hide-password">Mostrar
                        senha
                    </a>
                    <button type="button"
                        class="form-button0 submit-button custom-text-font-manrope custom-text-color1 password-button-font-size">Editar
                    </button>
                    <button type="submit"
                        class="form-button1 display-none submit-button custom-text-font-manrope custom-text-color1 password-button-font-size">Salvar
                    </button>
                </div>
                <p id="response" class="custom-text-font-manrope custom-text-color1 password-button-font-size"></p>

            </form>
        </article>

    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/Estudo/Cruds/CrudPhp/app/javascript/scriptHome.js"></script>
</body>

</html>