<body>
    <div class ="container"?>
        <div class="row">
            <H2 style="color:grey;font-size:20px;">IKLAN</H2>
            <hr>
            <?php
            foreach ($iklan as $output) {
                $string = $output->DESKRIPSI;
                $deskripsi = $string;
                echo "  <center>
            <p class='user'>IKLAN DARI : <a href='../../profil/lihatprofil/$output->USERNAME_MEMBER'>$output->USERNAME_MEMBER</a> ";
                if (isset($_SESSION['user'])) {
                    echo " - <a href='../../pesan/kirimpesan/$output->USERNAME_MEMBER'>kirim pesan</a></p>
             ";
                } else {
                    echo " - silahkan login untuk kirim pesan";
                }
                echo "
            <div class='container'> 
            <img style='width:300px;'class='card-img-top' src='$output->FOTO_BARANG' alt='image cap'>
            <ul class='list-group list-group-flush'>
            <div class='card' style='width: 20rem; position:relative; top: 30px;'>
            <div class='card-block'>
            <h4 class='card-title'>$output->JUDUL</h4>
            </div>
            <ul class='list-group list-group-flush'>
            <li class='list-group-item'>Rp. $output->HARGA</li>
            <li class='list-group-item'>$output->STATUS_BARANG</li>
            <li class='list-group-item'>KATEGORI : $output->KATEGORI</li>
                <p class='card-text'>$output->DESKRIPSI</p>
            </ul>     
            </div> 
            </div> </center>";
            }
            ?>
        </div>
        </br>
        </br>
        <h3>BERI KOMENTAR</h3>
        <?php echo form_open('iklan/komentarSubmit'); ?>
        <?php
        $id = $this->uri->segment(3);
        ?>

        <?php
        if (isset($_SESSION['user'])) {
            echo form_hidden('user', $_SESSION['user']);
            echo form_hidden('id', $id);
            echo"
                <div class='row'>
                <div class='col-lg-4'>
        <table>
       
        <tr><td>Komentar : </td><td> " . form_textarea('komentar', '') . "</td></tr>
        <tr><td></td><td> " . form_submit('submit', 'KOMENTARI') . "</td></tr>
       </div>
";
        } else {
            echo "UNTUK BERKOMENTAR SILAHKAN LOGIN";
        }
        ?>

    </table>
    <?php echo form_close(); ?>
    <div class='col-lg-6'>
        <?php
        if (isset($_SESSION['user'])) {
            foreach ($komentar as $output) {
                echo "
            
        <b><p> " . $output->USERNAME_MEMBER . " - <a href='../../pesan/kirimpesan/$output->USERNAME_MEMBER'>kirim pesan</a></p></b>
        <p> " . $output->KOMENTAR . "<a href='../../iklan/editkomentar/$output->ID_KOMENTAR' style='font-size:10px;'>&nbsp;&nbsp;&nbsp;&nbsp;"
                . "&nbsp;&nbsp;&nbsp;edit</a> | <a href='../../iklan/deletekomentar/$output->ID_KOMENTAR' style='font-size:10px;'> delete</a>";
            }
        } else {
            foreach ($komentar as $output) {
                echo "
            
        <b><p> " . $output->USERNAME_MEMBER . " </p></b>
        <p> " . $output->KOMENTAR . ""
                . "</p>";
            }
        }
        ?>

    </div> </div>
</div>
</div>
</body>
</html>