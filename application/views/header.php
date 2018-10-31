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

        <title>Justified Nav Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <?php echo link_tag(asset_url('css/bootstrap.min.css')); ?>
        <style>
            .navbar-collapse
            {
                background-color: #eee;
                border: 2px solid #ccc;
                border-radius: 5px;

            }
            :target {
                color: red;
            }
            .clicked{
                background-color: #ddd;
                 background-image: none;
                -webkit-box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
                box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
            }
            .nav > .active > a:hover,
            .nav > .active > a:active {
                background-color: #ddd;
                background-image: none;
                -webkit-box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
                box-shadow: inset 0 3px 7px rgba(0,0,0,.15);
            }
        </style>
        <!-- Custom styles for this template -->
        <?php echo link_tag(asset_url('css/justified-nav.css')); ?>
        <?php echo script_tag(asset_url('js/ie-emulation-modes-warning.js')); ?>
    </head>




