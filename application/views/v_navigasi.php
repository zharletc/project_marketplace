<?php
if (!isset($_SESSION['user'])) {
    echo " <nav>
            <div class = 'navbar-collapse collapse'>
            <ul class = 'nav navbar-nav navbar-left'>
            <li class = 'active'><a href = 'home'>HOME</a></li>
            </ul>
            <ul class = 'nav navbar-nav navbar-right'>
            <li class = 'clicked'> <a href = 'create'>BUAT AKUN</a></li>
            <li class = 'active'><a href = 'login'>LOGIN</a></li>
            </ul>
            </nav>";
} else {
    
}
?>
</ul>
</nav>


