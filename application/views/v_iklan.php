<body>
    <div class="container">
        <div class="masthead">
            <h3 class="text-muted">SELAMAT DATANG DI OPEN MARKETPLACE</h3>
            <nav>

                <?php
                if (!isset($_SESSION['user'])) {
                    echo " <nav>
            <div class = 'navbar-collapse collapse'>
            <ul class = 'nav navbar-nav navbar-left'>
            <li class = 'active'><a href = '../../home'>HOME</a></li>
            </ul>
            <ul class = 'nav navbar-nav navbar-right'>
            <li class = 'clicked'> <a href = 'create'>BUAT AKUN</a></li>
            <li class = 'active'><a href = 'login'>LOGIN</a></li>
            </ul>
            </nav>";
                } else {
                    echo "
                <ul class = 'nav nav-justified'>
                <li ><a href = '../market'>HOME</a></li>
                <li><a href = '../profil/profilku'>PROFIL KU</a></li>
                <li class = 'active'><a href = 'iklan/iklanku'>IKLAN KU</a></li>
                <li><a href = 'pasangiklan'>PASANG IKLAN</a></li>";

                    foreach ($pesan as $output) {
                        if (isset($notif)) {
                            if ($output->STATUS == "1") {
                                $notif += 1;
                            } else {
                                $notif += 0;
                            }
                        } else {
                            if ($output->STATUS == "1") {
                                $notif = 1;
                            } else {
                                $notif = 0;
                            }
                        }
                    }
                    if (isset($notif)) {
                        echo "<li><a href='market/notification/'>" . $notif . "PESAN</a></li>";
                    } else {
                        echo "<li><a href='market/notification/'>PESAN</a></li>";
                    }

                    if (isset($notif)) {
                        echo "<li><a href='../market/komentarmasuk'>" . $count . " NOTIF</a></li>";
                    } else {
                        echo "<li><a href='../market/komentarmasuk'>NOTIF</a></li>";
                    }
                }
                ?>
				<li><a href = '../logout'>Logout</a></li>
                </ul>
            </nav>
        </div>
