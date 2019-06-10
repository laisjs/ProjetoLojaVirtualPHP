<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>

<body>
    <?php include_once "header.php"; ?>



    <main class="container">
        <section class="row">
            <div class="col-md-6">
                <form action="salvarUsuario.php" method="post" enctype="multipart/form-data">
                    <!--action="salvarProduto.php"-->
                    <!--enctype="multipart/form-data"> esse é um novo recurso que avisa que está enviando arquivo, pq senao o servidor converte tudo em string-->

                    <div class="form-group">
                        <label for="nomeUsuario">Nome do Usuario</label>
                        <!--Label coloca uma descrição de cada input e quando coloca o for ele link o label no for.-->
                        <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome do Usuário"
                            name="nomeUsuario">
                        <!--é por meio do name que o php sabe o valor que ele está representando-->
                    </div>

                    <div class="form-group">
                        <label for="emailUsuario">Email</label>
                        <!--Label coloca uma descrição de cada input e quando coloca o for ele link o label no for.-->
                        <input type="email" class="form-control" id="emailUsuario" placeholder="Digite seu email" name="emailUsuario">
                        <!--é por meio do name que o php sabe o valor que ele está representando-->
                    </div>

                    <div class="form-group">
                        <label for="senhaUsuario">Senha</label>
                        <!--Label coloca uma descrição de cada input e quando coloca o for ele link o label no for.-->
                        <input type="password"  class="form-control" id="senhaUsuario" placeholder="Digite sua senha"
                            name="senhaUsuario">
                        <!--é por meio do name que o php sabe o valor que ele está representando-->
                    </div>

                    <div class="form-group">
                        <label for="nivelDeAcesso">Nível do Usuario</label>
                        <!--Label coloca uma descrição de cada input e quando coloca o for ele link o label no for.-->
                        <select name="nivelDeAcesso" id="nivelDeAcesso" class="form-control">
                            <option selected disabled> Selecione o nível!</option>
                            <option value="0"> Administrador</option>
                            <option value="1"> Usuario</option>
                        </select>
                    </div>



                    <!--botao-->
                    <button class="btn btn-success" type="submit">Finalizar cadastro</button>

                    </form>




            </div>
        </section>
    </main>


</body>

</html>