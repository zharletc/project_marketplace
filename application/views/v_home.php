<body>
    <style>
        #imaginary_container{

            margin-bottom:1%;
        }
        .stylish-input-group .input-group-addon{
            background: white !important; 
        }
        .stylish-input-group .form-control{
            border-right:0; 
            box-shadow:0 0 0; 
            border-color:#ccc;
        }
        .stylish-input-group button{
            border:0;
            background:transparent;
        }
    </style>
    <div class="container">
        <div class="masthead">
            <div class="row">
                <div class="col-sm-6 "> <h3 class="text-muted">SELAMAT DATANG DI OPEN MARKETPLACE</h3></div>
                <div class="col-sm-6 ">
                    <div id="imaginary_container"> 
                        <?php echo form_open('iklan/search'); ?>
                        <div class="input-group stylish-input-group">

                            <input type="text" name="inputsearch" class="form-control"  placeholder="Cari Iklan" >
                            <span class="input-group-addon">
                                <button type="submit" name="search">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>  
                            </span>

                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>


            <nav>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="target"><a href="home">HOME</a></li>   
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"> <a href="create">BUAT AKUN</a></li>
                        <li class="active"><a href="login">LOGIN</a></li>
                    </ul>

            </nav>
        </div>


