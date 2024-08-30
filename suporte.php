<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php' ?>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php include_once 'includes/menu.php' ?>
    <header>
        <p>Escola Milanês</p>
    </header>
    <main>
        <div class="content">
            
        <form>
            <div class="form-group" >
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"  class="form-control col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control col-sm-2" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input col-sm-0" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1 ">Confirme</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>


        </div>
        
        <footer>
            <p>&copy; 2024 Escola Milanês. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
