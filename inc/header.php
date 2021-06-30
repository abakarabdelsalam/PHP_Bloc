<header>
    <a href="./" class="logo">PHP_Blog</a>
    <ul class="header-menu">
        <li class=<?= $_SERVER['REQUEST_URI'] === './add-article.php' ? 'active' : '' ?>>
            <a href="./add-article.php">Écrire un article</a>
        </li>
    </ul>
</header>