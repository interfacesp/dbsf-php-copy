<?php
session_start();

include_once 'users.php';

$isLogged = false;
$isLoginAttempt=false; 

if(isset($_POST['username']) && isset($_POST['password'])){
    $isLoginAttempt = true;    
    $nomUtilisateur= $_POST['username'];
    $passwordUtilisateur = $_POST['password'];
     
    
    for($i=0; $i < count($users); $i++){

        if($users[$i]['username'] == $nomUtilisateur
         &&   $users[$i]['password'] == $passwordUtilisateur ){
             $_SESSION['LOGGED_USER'] = $users[$i]['username']; 
            //  $_SESSION['LOGGED_USER'] = $nomUtilisateur;
         }
    }

}

$isLogged = isset($_SESSION['LOGGED_USER']) && !empty($_SESSION['LOGGED_USER']); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sel et Miel</title>
</head>

<body>
    


<?php if($isLogged):  ?> 
    <?php include_once 'header.php';  ?>

    <p>
        Bienvenue sur la page principale, <?php echo $_SESSION['LOGGED_USER']; ?>!   
    </p>

    <?php include_once 'footer.php' ;  ?>

<?php  else: ?>
    <div class="login">
        
        <div class="error"> 
                <?php  
                    if($isLoginAttempt) {
                        echo "Le mot de passe ou le nom d'utilisateur est incorrect ";
                    }
                ?>
        </div>

        <?php include_once 'login.php'; ?>

    </div>
<?php endif; ?>
   
</body>
</html>
   


         


