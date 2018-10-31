<body>
    <div class="container">
        <H2> EDIT IKLAN  </H2>
        <?php echo form_open_multipart('iklan/editIklanSubmit'); ?>
        <?php echo form_hidden('id', $iklan['ID_IKLAN']); ?>
        <?php echo form_hidden('foto', $iklan['FOTO_BARANG']); ?>
        <div class="form-group">
            <label>JUDUL</label>
            <input name="judul" class="form-control" type="text" placeholder="judul" value=" <?php echo $iklan['JUDUL'] ?> " >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>FOTO BARANG</label>
            <input type="file" name="userfile" size="20" value= $iklan['FOTO_BARANG'] />
            <a href="../../iklan/deletefoto/<?php echo $iklan['ID_IKLAN'] ?>">HAPUS FOTO</a>
        </div>
        <div class="form-group">
            <label>HARGA</label>
            <input name="harga" type="text" class="form-control"   placeholder="harga" value="<?php echo $iklan['HARGA'] ?>" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>KATEGORI</label>
            <input name = "kategori" type="text" class="form-control" placeholder="kategori" value="<?php echo $iklan['KATEGORI'] ?>" >
        </div>

        <div class="form-group">
            <label>DEKSRIPSI IKLAN</label>
            <input name = "deskripsi" type="text" class="form-control" value= "<?php echo $iklan['DESKRIPSI'] ?>" placeholder="kategori">
        </div>

        <div class="form-group">
            <label>STATUS</label>
            <select name='status' class="form-control" value= "<?php echo $iklan['DESKRIPSI'] ?>">
                <option>Ready</option>
                <option>Terjual</option>
            </select>

        </div>
        <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
        <?php echo form_close(); ?>
    </div>
</body>