<body>
    <?php
    echo form_open('iklan/editkomentarsubmit');
    if (isset($_SESSION['user'])) {
        echo form_hidden('user', $komentar['USERNAME_MEMBER']);
        echo form_hidden('id', $komentar['ID_KOMENTAR']);
        echo"
                <div class='row'>
                <div class='col-lg-4'>
        <table>    
        <tr><td>Komentar : </td><td> " . form_textarea('komentar', $komentar['KOMENTAR']) . "</td></tr>
        <tr><td></td><td> " . form_submit('submit', 'EDIT') . "</td></tr>
       </div>
";
    } else {
        echo "UNTUK BERKOMENTAR SILAHKAN LOGIN";
    }
    ?>

</table>
<?php echo form_close(); ?>
</body>
