<html>
    <body bgcolor="blueviolet" text="white">
    <?php 
    
        $this->load->view('Nav.php');
    
    ?>
    <br><br>
        <center><h1><b>Welcome to BalanceEniquery Page</b></h1></center>

        <div class="row">
            <div class="col-md-4"></div>
               <div class="col-md-4" style="border: 2px solid gray";>
                    <form>
                        Enter Account number
                        <input type="text" name="ac" class="form-control"><br>
                        Enter Pin
                        <input type="text" name="p" class="form-control"><br>

                        <center><input type="submit" name="submit" class="btn btn-success" value="Deposit"></center>
                    </form>
                    <br><hr>
                    <h3><?php echo $msg; ?></h3>
               </div>
        </div>
    </body>
</html>