<?php
 include('db.php');
?>
<!DOCTYPE hmtl>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
        <link type="style/css" href="./css/style.css" />
        <title>Prueba Ayuntamiento</title>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" /> -->
    </head>
    <body>
        <div class="App">
            <form action="login.php" method="POST">
                <h3>Login de Usuario</h3>
                <div class="form-group">
                    <input placeholder="email" type="email" name="usrMail" id="usrMail"  />
                </div>
                <div class="form-group">
                    <input placeholder="password" type="password" name="usrPwd" id="usrPwd"  />
                </div>
                <br>
                <button type="submit" class="btn btn-lg btn-info">Ingresar</button>
            </form>
        </div>
    </body>
</html>