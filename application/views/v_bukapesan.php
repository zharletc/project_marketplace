<html>
<head>
</head>
<body>
<H2> PESAN </H2>
<?php echo form_open('pesan');?>
<?php 
echo "PESAN MASUK :</br>";
foreach($pesan as $output){
    echo " <h5>$output->FROM_USERNAME</h5>
           <p>$output->PESAN</p></br>";
}
?>    

<?php echo form_close();?>

</body>
</html>