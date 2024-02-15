<?php
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
    //administrador password= asd
    //cliente password= 123
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if($nickname=="admin"&& $password=="asd"){
        $error= "ok";
        header("Location:menu-admin.php");
        

    }
    elseif($nickname=="cliente"&& $password=="123"){
        $error= "ok";
        header("Location:menu-cliente.php?error=$error");
    }
    else{
        $error = "incorrecto";
        header("Location:index.php?error=$error");

    }

    

}else{
    $error = "vacio";
    header("Location:index.php?error=$error");


}