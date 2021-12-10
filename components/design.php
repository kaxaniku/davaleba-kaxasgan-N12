<header>
        <span class="logo">LOGO</span>
        <div class="user">
            <div>
                <img src="assets/img/user.png">
            </div>
            <div class="log">
                <span><?=($_SESSION['UserName'])?></span>
                <form method="post">
                <span>Root</span>
                <input type="hidden" name="logout">
                <button class="btn">Logout</button>
                </form>
            </div>
        </div>
</header>
<aside>
    <ul>
        <li class="<?= $SPage == 'dashboard' ? 'active' : ''  ?>">
            <a href="?SPage=dashboard">Dashboard</a>
        </li>
        <li class="<?= $SPage == 'categories' ? 'active' : ''  ?>">
            <a href="?SPage=categories">Categories</a>
        </li>
        <li class="<?= $SPage == 'news' ? 'active' : ''  ?>">
            <a href="?SPage=news">News</a>
        </li>
    </ul>
</aside>