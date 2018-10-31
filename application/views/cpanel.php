<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>ADMINISTRATOR LOGIN</title>

        <!-- Bootstrap core CSS -->
        <?php echo link_tag(asset_url('css/bootstrap.min.css')); ?>

        <?php echo script_tag(asset_url('js/ie-emulation-modes-warning.js')); ?>

        <?php echo link_tag(asset_url('css/signin.css')); ?>
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    </head>

    <body>

        <div class="container" >
            <?php echo form_open('admin/adminValidate', array('class' => 'form-signin')); ?>
            <h2>ADMINISTRATOR LOGIN</h2>
            <label for="inputEmail" class="sr-only">ADMIN NAME</label>
            <?php echo form_input('admin', '', array('id' => 'inputEmail', 'class' => 'form-control', 'placeholder' => 'Username', 'required' => 'true')); ?></td></tr>
    <label for="inputPassword" class="sr-only">PASSWORD</label>
    <?php echo form_password('pass', '', array('id' => 'inputPassword', 'class' => 'form-control', 'placeholder' => 'Password', 'required' => 'true')); ?></td></tr>
<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
</div> <!-- /container -->
</body>
</html>
