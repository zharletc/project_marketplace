<body>
    <div class="container">
        <div class="masthead">
            <h3 class="text-muted">SELAMAT DATANG DI OPEN MARKETPLACE</h3>
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
                echo "<nav>
            <ul class='nav nav-justified'>
            <li><a href='../market'>HOME</a></li>
            <li class='active'><a href=' '>PROFIL KU</a></li>
            <li><a href='../iklan/iklanku'>IKLAN KU</a></li>
            <li><a href='iklan/pasangiklan'>PASANG IKLAN</a></li>";

                foreach ($pesan as $output) {
                    if (isset($notif)) {
                        if ($output->STATUS == '1') {
                            $notif += 1;
                        } else {
                            $notif += 0;
                        }
                    } else {
                        if ($output->STATUS == '1') {
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
            }
            ?>
            </ul>
            </nav>

        </div>
        <center>
            <div class="card" style="width: 20rem; position:relative; top: 30px;">
                <img style="width:200px;"class="card-img-top" src="<?php echo $user['FOTO_PROFIL'] ?>" alt="image cap">
                <div class="card-block">
                    <h4 class="card-title"><?php echo $user['NAMA']; ?></h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">EMAIL : <?php echo $user['EMAIL']; ?></li>
                    <li class="list-group-item">USERNAME : <?php echo $user['USERNAME']; ?></li>
                    <li class="list-group-item">NO.HAPE : <?php echo $user['NO_HAPE']; ?></li>
                    <li class="list-group-item">TANGGAL LAHIR : <?php echo $user['TANGGAL_LAHIR']; ?></li>
                </ul>

                <div class="card-block">
                    <?php
                    $user = $this->uri->segment(3);
                    echo "
                    <a href='../../iklan/iklanuser/" . $user . "' class='card-link'>LAPAK</a>";
                    if (isset($_SESSION['user']) && $user == $_SESSION['user']) {
                        echo "
                        <a href = 'editProfil' class = 'card-link'>EDIT PROFIL</a>";
                    }
                    ?>

                </div>
            </div>
        </center>
    </div>
</body>