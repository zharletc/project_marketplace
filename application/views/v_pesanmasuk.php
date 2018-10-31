<html>
    <head>
    </head>
    <body>
        <H2> PESAN </H2>
        <?php echo form_open('pesan'); ?>
        <?php
        echo "PESAN MASUK :</br>";
        foreach ($pesan as $output) {
            $temp1 = $output->FROM_USERNAME;
            if (isset($temp2)) {
                if ($temp2 == $temp1) {
                    continue;
                } else {
                    echo "
                <a href='../pesan/bukapesan/$output->FROM_USERNAME'>$output->FROM_USERNAME</a>
                </br>";
                    $temp2 = $temp1;
                }
            } else {
                echo "
                <a href='../pesan/bukapesan/$output->FROM_USERNAME'>$output->FROM_USERNAME</a>
                </br>";
                $temp2 = $temp1;
            }
        }
        ?>    

        <?php echo form_close(); ?>

    </body>
</html>