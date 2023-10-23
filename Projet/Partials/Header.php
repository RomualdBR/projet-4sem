<?php if ($a == 1): ?>

    <nav class="main-nav">
        <a href="#" class="name">the Power Of Memory</a>
        <div class="nav-links">
             <ul>
                <li><a href="<?= PROJECT_FOLDER ?>index.php">ACCUEIL</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory.php">JEU</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/Score.php">SCORES</a></li>               
                <li><a href="<?= PROJECT_FOLDER ?>contact.php">NOUS CONTACTER</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>login.php">SE CONNECTER</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>register.php">S'INSCRIRE</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>MyAccount.php"><img src="<?= PROJECT_FOLDER ?>asset/images/photo_de_profil_MyAccount.png" alt="Photo_de_profil" class="photo_de_profil_myaccount_nav"></a></li>
            </ul>
        </div>     
     </nav>
<?php else: ?>

    <nav class="nav-other">
        <a href="#" class="name">The Power of Memory</a>
        <div class="nav-links">
             <ul>
                <li><a href="<?= PROJECT_FOLDER ?>index.php">ACCUEIL</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory.php">JEU</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/Score.php">SCORES</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>contact.php">NOUS CONTACTER</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>login.php">SE CONNECTER</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>register.php">S'INSCRIRE</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>MyAccount.php"><img src="<?= PROJECT_FOLDER ?>asset/images/photo_de_profil_MyAccount.png" alt="Photo_de_profil" class="photo_de_profil_myaccount_nav"></a></li>
            </ul>
        </div> 
    </nav>
<?php endif; ?>