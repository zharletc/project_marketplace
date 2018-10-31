<html>
    <body style="background-color: #e8e8e8;">
        <center><H2> MEMBER  </H2></center>
        <div class="container">
            <div class="row">
                <?php foreach ($member as $output) { ?>
                    <div class="col-lg-3" >
                        <div class="card" style="width: 20rem;position:relative;top: 30px;">
                            <img style="width:200px;"class="card-img-top" src="<?php echo $output->FOTO_PROFIL ?>" alt="image cap">
                            <div class="card-block">
                                <h4 class="card-title"><?php echo $output->NAMA; ?></h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">NAMA : <?php echo $output->NAMA; ?></li>
                                <li class="list-group-item">EMAIL : <?php echo $output->EMAIL; ?></li>
                                <li class="list-group-item">USERNAME: <?php echo $output->USERNAME; ?></li>
                                <li class="list-group-item">TANGGAL LAHIR : <?php echo $output->TANGGAL_LAHIR; ?></li>
                                <li class="list-group-item">NO.HAPE : <?php echo $output->NO_HAPE; ?></li>
                            </ul>

                            <div class="card-block">
                                <?php $user = $this->uri->segment(3); ?>
                                <center><a href='../iklan/iklanuser/<?php echo $output->USERNAME ?>' class='card-link'>LAPAK</a>
                                    |
                                    <a href = 'deleteuser/<?php echo $output->USERNAME ?>' class = 'card-link'>DELETE</a>
                                </center>


                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </body>
</HTML>