<?php
include('db.php');

    $v1 = $_POST['usrId'];
    $v2 = $_POST['nProd'];
    $v3 = $_POST['descProd'];

   // echo "mail ".$v1." - ".$v2;
    //valida si usuario y contraseña existen
    $sql = "Insert into productos (nombre, descripcion, user_id)values('{$v2}','{$v3}','{$v1}')";
    
    $query = mysqli_query($conn,$sql);
    //$data = mysqli_fetch_array($query);      

    if($query){
     /*  echo "<br>";
        print_r($data['nombre']);
        echo "</br>"; */
    }else{
        echo "Error ";
    }
    

    //redirigir a listado de productos

  //  $usrId = $data['id'];
  //  $usrNom = $data['nombre'];
?>