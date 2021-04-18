<?php
    session_start();

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null; // 1 = admin; 2 = usuario comum

    $lista_usuarios = array(
        array('id' => 1, 'email' => 'admin@teste.com', 'senha' => '1234', 'perfil' => 1),
        array('id' => 2, 'email' => 'admin1@teste.com', 'senha' => '12345', 'perfil' => 1),
        array('id' => 3, 'email' => 'admin2@teste.com', 'senha' => '12346', 'perfil' => 1),
        array('id' => 4, 'email' => 'admin3@teste.com', 'senha' => '12347', 'perfil' => 2),
        array('id' => 5, 'email' => 'admin4@teste.com', 'senha' => '12348', 'perfil' => 2)
    );

    foreach($lista_usuarios as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['password']){
            $usuario_autenticado = true;
            $usuario_id = $user['id']; 
            $usuario_perfil_id = $user['perfil'];
            break;
        }
    }

    if($usuario_autenticado){   
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
       header('Location: index.php?login=erro');
    }

?>