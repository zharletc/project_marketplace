<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>

<li><?php echo $upload_data['full_path'];?></li>

</ul>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html