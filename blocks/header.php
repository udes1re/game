<header class="container">
    <span class="logo">LOGO</span>
    <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <nav>
        <ul>
            <li class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
                <a href="index.php">Home</a>
            </li>
            <li class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">
                <a href="about.php">About us</a>
            </li>
            <li class="<?= basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : '' ?>">
                <a href="portfolio.php">Portfolio</a>
            </li>
            <li class="<?= basename($_SERVER['PHP_SELF']) == 'news.php' ? 'active' : '' ?>">
                <a href="news.php">News</a>
            </li>
            <li class="btn"><a href="contacts.php">Contacts</a></li>
        </ul>
    </nav>
    <script src="/js/script.js"></script>
</header>
