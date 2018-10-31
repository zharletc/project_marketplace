<div class ="container"?>
    <div class="row">
        <H2 style="color:grey;font-size:20px;">RESULT</H2>
        <hr>
        <?php
        foreach ($judul as $output) {
            $judul1 = $output->JUDUL;
            $string = $output->DESKRIPSI;
            if (stripos($judul1, $cari) !== false) {
                if (strlen($string) > 50) {
                    $deskripsi = substr($string, 0, 50);
                } else {
                    $deskripsi = $string;
                }
                echo "
             <div class='col-lg-4'>
             <h2><a href='../market/lihatiklan/$output->ID_IKLAN'>$output->JUDUL</a></h2>
             <p class='harga'>HARGA : $output->HARGA</p> 
             <p>$deskripsi</p>      
             <img style='width:300px;'class='image' src='$output->FOTO_BARANG' alt='$output->JUDUL'>
             <p class='kategori'>$output->KATEGORI</p>          
             <p><a class='btn btn-primary' href='editiklan/$output->ID_IKLAN' role='button'>EDIT &raquo;</a></p>
             </div> ";
            }
        }
        ?>
    </div>
</div>
</div>
</body>
</html>