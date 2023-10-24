<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<?php if ($a == 1) : ?>


    <nav class="main-nav">
        <a href="#" class="name">the Power Of Memory</a>
        <div class="nav-links">
            <ul>
                <li class="present"><a href="<?= PROJECT_FOLDER ?>index.php">ACCUEIL</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory.php">JEU</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/Score.php">SCORES</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>contact.php">NOUS CONTACTER</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>login.php">SE CONNECTER</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>register.php">S'INSCRIRE</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>MyAccount.php"><img src="<?= PROJECT_FOLDER ?>asset/images/photo_de_profil_MyAccount.png" alt="Photo_de_profil" class="photo_de_profil_myaccount_nav"></a></li>
            </ul>
        </div>
    </nav>
<?php else : ?>

    <nav class="nav-other">
        <a href="#" class="name">The Power of Memory</a>
        <div class="nav-links">
            <ul>
                <li><a href="<?= PROJECT_FOLDER ?>index.php">ACCUEIL</a></li>
                <li <?php if ($current_page == 'memory.php') : ?> style="border-top: solid; border-top-color: #ec9123; border-width: 5px 0px;" <?php endif; ?>><a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory.php" <?php if ($current_page == 'memory.php') : ?>style="color:#ec9123;" <?php endif; ?>>JEU</a></li>
                <li <?php if ($current_page == 'Score.php') : ?> style="border-top: solid; border-top-color: #ec9123; border-width: 5px 0px;" <?php endif; ?>><a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/Score.php" <?php if ($current_page == 'Score.php') : ?>style="color:#ec9123;" <?php endif; ?>>SCORES</a></li>
                <li <?php if ($current_page == 'contact.php') : ?> style="border-top: solid; border-top-color: #ec9123; border-width: 5px 0px;" <?php endif; ?>><a href="<?= PROJECT_FOLDER ?>contact.php" <?php if ($current_page == 'contact.php') : ?>style="color:#ec9123;" <?php endif; ?>>NOUS CONTACTER</a></li>
                <li <?php if ($current_page == 'login.php') : ?> style="border-top: solid; border-top-color: #ec9123; border-width: 5px 0px;" <?php endif; ?>><a href="<?= PROJECT_FOLDER ?>login.php" <?php if ($current_page == 'login.php') : ?>style="color:#ec9123;" <?php endif; ?>>SE CONNECTER</a></li>
                <li <?php if ($current_page == 'register.php') : ?> style="border-top: solid; border-top-color: #ec9123; border-width: 5px 0px;" <?php endif; ?>><a href="<?= PROJECT_FOLDER ?>register.php" <?php if ($current_page == 'register.php') : ?>style="color:#ec9123;" <?php endif; ?>>S'INSCRIRE</a></li>
                <li <?php if ($current_page == 'MyAccount.php') : ?> style="border-top: solid; border-top-color: #ec9123; border-width: 5px 0px;" <?php endif; ?>><a href="<?= PROJECT_FOLDER ?>MyAccount.php"><img src="<?= PROJECT_FOLDER ?>asset/images/photo_de_profil_MyAccount.png" alt="Photo_de_profil" class="photo_de_profil_myaccount_nav"></a></li>
            </ul>
        </div>
    </nav>
<?php endif; ?>