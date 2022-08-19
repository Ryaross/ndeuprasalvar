<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyLibrary</title>
    <link rel="stylesheet" href="src/assets/css/index.css">
</head>
<body>
    <div class="container">
        <div class="container">
            <div class="leftDiv">
    
            </div>
            <div class="rightDiv">
                <div class="boxTitle"><h2>Login</h2></div>  
                <span class="subtitle">Welcome back! Please enter your details.</span>
                <div class="connect">
                    <div class="social">
                        <div class="boxFacebook">
                            <a href="#" class="log"><i class="fa-brands fa-google"></i></i>Log in with google</a>
                        </div>
                    </div>      
                </div>
        
                <div class="hrBox"><span class="hr">Or</span></div>
        
                <form action="" method="post">
                    <div class="inputBox">
                        <input type="email" name="login" id="email" placeholder="Email">
                        <div class="underline"></div>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="senha" id="password" placeholder="Password">
                        <div class="underline"></div>
                    </div>
        
                    <div class="passwordF"><a href="#">Forgot password?</a></div>
        
                    <input type="submit" value="Log in">
                </form>
        
                <div class="spanBox">
                    <span>Don't have an account? <a href="#">Sign up for free</a></span>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/07cc412226.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
include('biblioteca.php');
  if($_POST){
    $resultado = Login($_POST['login'], $_POST['senha'], "");
    if($resultado['erro']){
      echo "<script> alert('Usuário e/ou senha inválido!!')</script>";
    } else{
        $user = $resultado['dados'];
        if($user->user_status == 'bloqueado'){
          echo 'Usuário bloqueado.';
        } else{
          if($user->adm ==0){
            $user = $resultado['dados'];
            $_SESSION['rm'] = $user->rm;
            $_SESSION['nome'] = $user->nome;
            $_SESSION['email'] = $user->email;
            $_SESSION['senha'] = $user->senha;
            $_SESSION['perfil'] = $user->perfil;
            $_SESSION['user_status'] = $user->user_status;
            $_SESSION['adm'] = $user->adm;
            header('location: home.php');
          } else{
            header('location: homeAdm.php');
          }
        }
    }
  }
?>