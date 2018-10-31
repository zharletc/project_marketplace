<div class ="container"?>
    <div class="row">
        <H2 style="color:grey;font-size:20px;">KOMENTAR UNTUK IKLAN</H2>
        <hr>
        <?php
        foreach ($iklan as $output) {                       
             echo "
             <div class='col-lg-4'>
             <h2><a href='../market/cekkomment/$output->ID_IKLAN'>$output->JUDUL</a></h2>
             
             ";          
        }
        ?>
    </div>
</div>
</div>
</body>
</html>