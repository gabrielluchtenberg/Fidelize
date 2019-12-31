<?php


require_once "classes/site.php";
$site = new Site();

include "include/header.php";

?>

<div class="container">
    <div class="row p-1">
        <div class="col-12 col-md-8 offset-md-2 bg-light rounded mt-5">
            <div class="row">
                <div class="col px-4 ml-4 pt-4">
                    <a href="../fidelize/index.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Voltar</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 text-center mt-4 mb-3 px-5 p-md-0">
                    <img src="../media/images/fidelize_adm_preto.png" class="img-fluid" style="width:350px;">
                    <h1></h1>
                </div>
            </div>
            <div class="row">
                <div class="col px-4 ">
                    <?php getAlerta(); ?>
                    <form method="post">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control rounded-0" name="inputEmailAdm" id="inputEmailAdm" placeholder="Digite seu email..." value="<?= (isset($_SESSION['email_digitado']) ? $_SESSION['email_digitado'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputSenha">Senha</label>
                            <input type="password" class="form-control rounded-0" name="inputSenhaAdm" id="inputSenhaAdm" placeholder="Sua senha...">
                        </div>
                        <button class="btn btn-block btn-lg btn-orange my-5 type=" submit" name="btnEntrar">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "include/footer.php" ?>