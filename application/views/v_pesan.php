<body>
    <div class="container">
        <body>

            <div class="masthead">
                <h3 class="text-muted">SELAMAT DATANG DI OPEN MARKETPLACE</h3>
                <nav>

                    <ul class="nav nav-justified">
                        <li ><a href="../market">HOME</a></li>
                        <li><a href="../profil/profilku">PROFIL KU</a></li>
                        <li><a href="../iklan/iklanku">IKLAN KU</a></li>
                        <li><a href='../iklan/pasangiklan'>PASANG IKLAN</a></li>

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
                            echo "<li class='active'><a href='market/notification/'>" . $notif . "PESAN</a></li>";
                        } else {
                            echo "<li><a href='market/notification/'>PESAN</a></li>";
                        }
                        ?>
                        <li><a href='../logout'>Logout</a></li>
                    </ul>
                </nav>
            </div>
            <H2> SILAHKAN KIRIM PESAN </H2>
            <?php echo form_open('pesan/submit', array('name' => 'kirimpesan')); ?>
            <?php echo form_hidden('from', $_SESSION['user']); ?>
            <table>
                <?php
                if (isset($user)) {
                    echo " <tr><td>TO:</td><td> " .form_input('to', $user) ."</td></tr>";
                } else {
                    echo " <tr><td>TO:</td><td> " .form_input('to'). "</td></tr>";
                }
                ?>
                <tr><td>PESAN:</td><td> <?php echo form_textarea('pesan', ''); ?></td></tr>
                <tr><td></td><td><?php echo form_submit('submit', 'SUBMIT'); ?></td></tr>
			</table>
				<?php echo form_close(); ?>

        </body>
    </html>



