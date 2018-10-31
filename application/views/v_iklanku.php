<div class ="container"?>
    <div class="row">
        <H2 style="color:grey;font-size:20px;">IKLAN KU</H2>
        <hr>
            <?php
            foreach ($iklan as $output) {
                $string = $output->DESKRIPSI;
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
             <img style='width:100%;height:250px;'class='image' src='$output->FOTO_BARANG' alt='$output->JUDUL'>
             <p class='kategori'>$output->KATEGORI</p>          
             <span><a class='btn btn-primary' href='editiklan/$output->ID_IKLAN' role='button'>EDIT </a></span>
             <span><a class='btn btn-primary' href='deleteIklan/$output->ID_IKLAN' role='button'>DELETE </a></span>
</div> ";
            }
            ?>
    </div>
</div>
</div>
</body>
</html>