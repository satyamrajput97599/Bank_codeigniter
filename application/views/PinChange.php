<html>
    <body bgcolor="blueviolet" text="white">
        <?php $this->load->view('Nav.php'); ?>
        <br><br>
        <center><h1><b>Welcome to Pin Change Page</b></h1></center>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="border: 2px solid gray";>
                <form method="post" action="">
                    Enter Account number
                    <input type="text" name="ac" class="form-control"><br>
                    Enter Pin
                    <input type="text" name="op" class="form-control"><br>
                    Enter New Pin
                    <input type="text" name="np" class="form-control"><br>

                    <center><input type="submit" name="submit" class="btn btn-success" value="Change Pin"></center>
                    <h1><p><?php echo $msg; ?></p></h1>
                </form>
            </div>
        </div>
    </body>
</html>
