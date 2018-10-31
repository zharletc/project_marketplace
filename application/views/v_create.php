<body>
    <div class="container">
        <div class="masthead">
            <h3 class="text-muted">SILAHKAN DAFTAR</h3>
            <nav>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="home">HOME</a></li>   
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="clicked"> <a href="create">BUAT AKUN</a></li>
                        <li class="active"><a href="login">LOGIN</a></li>
                    </ul>

            </nav>
        </div>
        </BR>
        <?php echo form_open('create/createAccountSubmit'); ?>
        <div class="form-group">
            <label>NAMA</label>
            <input name="nama" class="form-control" type="text" placeholder="nama">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>EMAIL</label>
            <input name="email" type="email" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>USERNAME</label>
            <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>PASSWORD</label>
            <input name = "pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        <?php echo form_close(); ?>
    </div>

</body>