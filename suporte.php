<?php
$titulo_pagina = "Suporte";
$sucess_mensagem = $_GET['success'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php require('./modulos/top-menu.php') ?>

<body>
    <div id="body-container">
        <?php require('./modulos/side-menu.php') ?>
        <div id="content">
            <div id="header">SUPORTE</div>
            <form action="enviar-mensagem.php" method="POST">
                <div class="cadastro-usuario">
                    <?php if ($sucess_mensagem != NULL) { ?>
                        <div class="sucess"><?= $sucess_mensagem ?></div>
                    <?php } ?>
                    <div class="form-usuario">
                        <label for="nome">Nome*</label>
                        <input required name="nome" id="nome" placeholder="Nome" class="form-input" type="text">
                    </div>
                    <div class="form-usuario">
                        <label for="email">E-mail*</label>
                        <input required name="email" id="email" class="form-input" placeholder="E-mail" type="email">
                    </div>
                    <div class="form-usuario">
                        <label for="assunto">Assunto*</label>
                        <select name="assunto" id="assunto" required>
                            <option value="" disabled selected>Selecione</option>
                            <option value="Sugestão">Sugestão</option>
                            <option value="Crítica">Crítica</option>
                            <option value="Elogio">Elogio</option>
                            <option value="Dúvida">Dúvida</option>
                            <option value="Suporte">Suporte</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-usuario">
                        <label for="mensagem">Mensagem*</label>
                        <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
                    </div>

                    <div class="area-botao">
                        <button class="botao" type="submit">Enviar</button>
                    </div>

            </form>
        </div>
    </div>
    </div>
</body>

</html>