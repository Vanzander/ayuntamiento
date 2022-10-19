<?php
include('db.php');

    $v1 = $_POST['usrMail'];
    $v2 = $_POST['usrPwd'];

   // echo "mail ".$v1." - ".$v2;
    //valida si usuario y contraseña existen
    $sql = "Select * from usuarios where email='{$v1}' and password = '{$v2}'";
    
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($query);      

    if($data){
     /*  echo "<br>";
        print_r($data['nombre']);
        echo "</br>"; */
    }else{
        echo "Error ";
    }
    

    //redirigir a listado de productos

    $usrId = $data['id'];
    $usrNom = $data['nombre'];

    //$sqlP = "Select * from productos where user_id = '{$usrId}'";
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h3>Bienvenido <?php echo $usrNom.' '.$usrId ; ?></h3>
        <br>
        <div>
            <form action="productos.php" method="POST">
                <h4>Ir a listado de productos</h4>
                <input hidden name="usrId" value="<?php echo $usrId; ?>" />
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Ver listado</button>
                </div>
            </form>
            
        </div>
    </body>
</html>
