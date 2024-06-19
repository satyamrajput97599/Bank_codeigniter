<html>
    <?php 
    
        $this->load->view('Nav.php');
    
    ?>
    <body>
        <center><h1><b>Welcome to Withdrawal Page</b></h1></center>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="border: 2px solid gray;">
                <form method="post">
                    Enter Account number
                    <input type="text" name="ac" class="form-control"><br>

                    Enter Pin
                    <input type="text" name="p" class="form-control"><br>

                    Enter Amount
                    <input type="text" name="a" class="form-control"><br>

                    <center><input type="submit" name="submit" class="btn btn-success" value="Withdrawal"</center>
                </form>
            </div>
        </div>
    </body>
</html>