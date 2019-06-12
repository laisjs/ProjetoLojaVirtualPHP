<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>

<body>
    <?php include_once "header.php";?>


    <main class="container">
    <section class="row">
        <div class="col-md-6">
            <form action="logarUsuario.php" method="post" enctype="multipart/form-data">

               
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
                
                <button class="btn btn-success" type="submit">Logar</button>
                    <p>Ou</p>
                <a class="btn btn-primary" href="cadastroUsuario.php">Criar cadastro!</a>    
            </form>
        </div>
    </section>
    </main>



</body>

</html>