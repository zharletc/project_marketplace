<html>
    <body style="background-color: #eae6de;">

    <center><h2> MANAGE YOUR USER BY ADMIN` </h2>
        <?php
        echo form_open('manage/moderasiIklan');
        echo "<button type='submit' class='btn btn-default btn-lg' style='width:100%;'> CEK MODERASI</button>";
        echo form_close();
        ?>
        </br>
        <?php
        echo form_open('manage/cekpost');
        echo "<button type='submit' class='btn btn-default btn-lg' style='width:100%;'> CEK POST</button>";
        echo form_close();
        ?>
        </br>
        <?php
        echo form_open('manage/cekuser');
        echo "<button type='submit' class='btn btn-default btn-lg' style='width:100%;'> CEK USER</button>";

        echo form_close();
        ?>
		</br>
		<a href="logout">Logout</a>

    </center>
</body>
</html>