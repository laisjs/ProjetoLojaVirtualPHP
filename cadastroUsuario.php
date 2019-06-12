<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>

<body>
    <?php include_once "header.php";?>


    <main class="container">
    <section class="row">
        <div class="col-md-6">
            <form action="salvarUsuario.php" method="post" enctype="multipart/form-data">

                <!-- N produto -->
                <div class="form-group">
                    <label for="nomeUsuario">Nome do Usuario</label>
                    <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome do Usuario"
                        name="nomeUsuario">
                </div>
                <!-- Preço do produto -->
                <div class="form-group">
                    <label for="emailUsuario">Email do Usuario</label>
                    <input type="email"  class="form-control" id="emailUsuario"
                        placeholder="Email do Usuario" name="emailUsuario">
                </div>
                <!-- Descrição do produto -->
                <div class="form-group">
                    <label for="senhaUsuario">Senha do Usuario</label>
                    <input type="password" class="form-control" name="senhaUsuario" id="senhaUsuario" placeholder= " Senha do Usuario">
                </div>

                <!-- Imagem do Produto -->
                <div class="form-group">
                  <label for="nivelUsuario">Nivel do Usuario</label>
                  <select name="nivelUsuario" id="nivelUsuario" class="form-control">
                    <option selected disabled> Selecione o nivel! </option>
                    <option value="0">Administrador</option>
                    <option value="1">Usuario</option>
                  </select>
                </div>

                <button class="btn btn-success" type="submit">Finalizar cadastro</button>
            </form>
        </div>
    </section>
    </main>



</body>

</html>