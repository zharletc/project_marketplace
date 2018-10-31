<body>
<center><H2> IKLAN MODERASI  </H2></center>
<?php
foreach ($iklan as $output) {
    echo form_open('manage/moderasiSubmit');
    ?>

    <div class="container" style="background-color:#e8e8e8; border:2px solid grey; border-radius: 10px">

        <?php echo form_open_multipart('iklan/editIklanSubmit'); ?>
        <?php echo form_hidden('id', $output->ID_IKLAN); ?>
        <?php echo form_hidden('foto', $output->FOTO_BARANG); ?>
        <div class="form-group">
            <label>JUDUL</label>
            <input name="judul" class="form-control" type="text" placeholder="judul" value=" <?php echo $output->JUDUL ?> " >

        </div>
        <div class="form-group">
            <label>FOTO BARANG</label>
            <img style='width:400px;'class='card-img-top' src='<?php echo $output->FOTO_BARANG ?>' alt='image cap'>
        </div>
        <div class="form-group">
            <label>HARGA</label>
            <input name="harga" type="text" class="form-control"   placeholder="harga" value="<?php echo $output->HARGA ?>" >

        </div>
        <div class="form-group">
            <label>KATEGORI</label>
            <input name = "kategori" type="text" class="form-control" placeholder="kategori" value="<?php echo $output->KATEGORI ?>" >
        </div>

        <div class="form-group">
            <label>DEKSRIPSI IKLAN</label>
            <input name = "deskripsi" type="text" class="form-control" value= "<?php echo $output->DESKRIPSI ?>" placeholder="deskripsi">
        </div>

        <div class="form-group">
            <label>STATUS</label>
            <select name='status' class="form-control"">
                <option>Ready</option>
                <option>Tolak</option>
            </select>

        </div>
        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        </br>
                    </br>

    </div>
    </br>

    <?php
}
echo form_close();
?>
</div>
</body>