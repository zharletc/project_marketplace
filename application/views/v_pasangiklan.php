<body>

    <div class="container">
        <H2> PASANG IKLANMU  </H2>
        <?php echo form_open_multipart('iklan/pasangiklanSubmit'); ?>
        <?php echo form_hidden('user', $_SESSION['user']); ?>
        <div class="form-group">
            <label>JUDUL</label>
            <input name="judul" class="form-control" type="text" placeholder="judul">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>FOTO BARANG</label>
            <input type="file" name="userfile" size="20" />
        </div>
        <div class="form-group">
            <label>HARGA</label>
            <input name="harga" type="text" class="form-control"   placeholder="harga">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>KATEGORI</label>
            <input name = "kategori" type="text" class="form-control" placeholder="kategori">
        </div>
        
        <div class="form-group">
            <label>DEKSRIPSI IKLAN</label>
            <input name = "deskripsi" type="text" class="form-control" placeholder="kategori">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        <?php echo form_close(); ?>
    </div>
</body>