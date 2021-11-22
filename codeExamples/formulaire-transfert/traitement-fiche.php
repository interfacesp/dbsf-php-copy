<?php
// if(isset($_POST['nom'])  && isset($_POST['prenom'])){
//     echo "Nom reçu: ".  htmlspecialchars($_POST['nom']). "</br>";
    
//     echo "Prénom reçu: ". htmlspecialchars($_POST['prenom']);

// }else {
//     echo "Désolé, pas de nom ni de prénom";
// }


if(isset($_POST['hello'])){
    
    echo "var avec clé hello existe";

}else {
    echo "var avec clé hello N'existe pas!";
}
var_dump($_POST['hello']);
echo $_POST['hello'];



echo "print POST";

echo '<pre>';
print_r($_POST);
echo '</pre>';

if(empty($_POST['nom'])){
    //faire quelque si vide
    echo 'vide';
}else {
    //pas vide
    echo $_POST['nom'];
}

var_dump(isset($_POST['nom']));
empty($_POST['nom']);

var_dump(isset($_POST['prenom']));

var_dump(isset($_POST['message']));


//if ...


?>


