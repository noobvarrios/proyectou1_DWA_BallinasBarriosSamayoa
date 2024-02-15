<?php
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
    //administrador password= asd
    //cliente password= 123
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if($nickname=="admin"&& $password=="asd"){  
        $error= "ok";
        echo "Accedió";
        header("Location:menu-admin.php"); 
    }
    elseif ($nickname=="cliente"&& $password=="123"){
      $error= "ok";
      echo "Accedió";
      header("Location:menu-cliente.php");

    }
    else{
        $error = "incorrecto"; 
        header("Location:inicio-sesion.php?error=$error");
    }

   }
      else{
    $error = "vacio";
    header("Location:inicio-sesion.php?error=$error");


}
