<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Lihat Postingan User</h4>
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <th>Iklan Dari</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Status</th>                      
                            <th>Delete</th>
                            </thead>
                            <tbody>
                                <?php foreach ($iklan as $output) { ?>
                                    <tr>
                                        <td><?php echo $output->USERNAME_MEMBER ?></td>
                                        <td><a href='../market/lihatiklan/<?php echo $output->ID_IKLAN ;?>'><?php echo $output->JUDUL ?></a></td>
                                        <td><?php echo $output->KATEGORI ?></td>
                                        <td><?php echo $output->HARGA ?></td>
                                        <td>+<?php echo $output->STATUS_BARANG ?></td>
                                        <?php 
                                        $id_iklan = $output->ID_IKLAN;
                                        echo form_open("manage/deleteIklan/".$id_iklan) ;?>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Delete">
                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal">
                                        <span class="glyphicon glyphicon-trash"></span>
                                        </button></p></td>
                                       <?php echo form_close(); ?>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
