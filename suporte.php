<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php' ?>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php include_once 'includes/menu.php' ?>
    <header>
        <p>Escola Quintino Folhiarine Dajori</header></p>
    </header>
    <main>
        <div class="content">
            
        <form>
            <div class="form-group" >
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"  class="form-control col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input col-sm-0" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1 ">Confirme</label>
                <h3>Informe o problema</h3>
            <form method="post" action="enviar_solicitacao.php">
                <div class="form-group">
                    <label for="solicitacao">Escreva aqui o seu problema:</label>
                    <textarea id="solicitacao" name="solicitacao" class="form-control col-sm-8" rows="4" required></textarea>
               

            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>


        </div>
        
        <footer>
            <p>&copy; 2024 Escola Quintino Folhiarine Dajori. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
