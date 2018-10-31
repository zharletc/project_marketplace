<body>
    <div class="container">
        <div class="masthead">
            <h3 class="text-muted">SELAMAT DATANG DI OPEN MARKETPLACE</h3>
            <nav>
                <ul class="nav nav-justified">
                    <li ><a href="../market">HOME</a></li>
                    <li class="active"><a href="../profil/profilku">PROFIL KU</a></li>
                    <li><a href="../iklan/iklanku">IKLAN KU</a></li>
                    <li><a href="../iklan/pasangiklan">PASANG IKLAN</a></li>
                    <?php
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
                        echo "<li><a href='../market/notification/'>" . $notif . "PESAN</a></li>";
                    } else {
                        echo "<li><a href='../market/notification/'>PESAN</a></li>";
                    }
                    if (isset($notif)) {
                        echo "<li><a href='../market/komentarmasuk'>" . $count . " NOTIF</a></li>";
                    } else {
                        echo "<li><a href='../market/komentarmasuk'>NOTIF</a></li>";
                    }
                    ?>
                     <li><a href='../logout'>Logout</a></li>
                </ul>
            </nav>
        </div>
        </BR>
        <?php echo form_open_multipart('profil/editProfilSubmit'); ?>
        <div class="form-group">
            <label>NAMA</label>
            <input name="nama" class="form-control" type="text" placeholder="nama" value="<?php echo $user['NAMA'] ?>">

        </div>
        <div class="form-group">
            <label>EMAIL</label>
            <input name="email" type="email" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="email" value="<?php echo $user['EMAIL'] ?>">

        </div>
        <div class="form-group">
            <label>USERNAME</label>
            <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" value="<?php echo$user['USERNAME'] ?>" readonly>

        </div>
        <div class="form-group">
            <label>TGL LAHIR</label>
            <input name="tgl_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" value="<?php echo $user['TANGGAL_LAHIR'] ?>">

        </div>
        <div class="form-group">
            <label>FOTO PROFIL</label>
            <input type="file" name="userfile" size="20" />
            <br /><br />
        </div>
        <div class="form-group">
            <label>NO HAPE</label>
            <input name="no_hape" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="no hape" value="<?php echo $user['NO_HAPE'] ?>">

        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
    </div>

</body>



