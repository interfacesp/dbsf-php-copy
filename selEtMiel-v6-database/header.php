
<header>
<h1>Bienvenue chez Sel et Miel</h1>

<a href="home.php">
    <img src="images/logo.png" alt="Le logo de Sel et Miel"/>
</a>

<?php if(isset($_SESSION['LOGGED_USER'])):   ?>
    <div class="droite">
            Bonjour, 
            <?php echo $_SESSION['LOGGED_USER']; ?>
            <a href="deconnexion.php">Déconnexion</a>
    </div>


<?php endif; ?>


<nav id="entete">        
    <div class="navigation">
        <ul>
            <li><a href="gaufres.php" >Gaufres</a></li>
            <li><a href="">Crêpes (Inactif)</a></li>
            <li><a href="">Tartes (Inactif)</a></li>
            <li><a href="#">Boissons (Inactif) </a></li>
            <li>
                <a href="contact.php">             
                Contact
                </a>
            </li>

        </ul>
    </div>    
</nav>

</header>