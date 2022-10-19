<?php
include ('db.php');
 $v1 = $_POST['usrId'];
 
 $sql = "Select * from productos where user_id = '{$v1}'";
 $query = mysqli_query($conn,$sql);
 $data = mysqli_fetch_assoc($query);

 print_r($data);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PRODUCTOS</title>
    </head>
    <body>
        <div>
            <h3>Agregar Producto</h3>
            <form action="add.php" method="POST">
                <input type="text" placeholder="nombre" name="nProd" id="nProd" />
                <input type="text" placeholder="descripcion" name="descProd" id="descProd" />
                <input hidden name="usrId" value="<?php echo $v1; ?>" />
                <button type="submit" class="btn btn-lg btn-info">AGREGAR</button>
            </form>
        </div>
        <br>
        <h3>listado de Productos</h3>
        <div class="nav">
            <table>
                <tbody>        
                    <?php 
                    foreach($data as $val)
                    {
                        print_r("<tr>&nbsp;".$val."&nbsp;</tr>");
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>