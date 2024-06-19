<html>
    <body bgcolor-blueviolet text="white">
        <?php 
        
            $this->load->view('Nav.php');
        
        ?>
        <br><br>
        <center><h1><b>Welcome to CreateAccount Page</b></h1></center><br><hr>
        <!-- <marquee><h3><?php echo $msg; ?></h3></marquee> -->



        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="border:2px solid gray">
            <form method="post">
                <div class="row">
                    <div class="col">
                        Enter Pin
                        <input type="text" name="p" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        Enter Name
                        <input type="text" name="n" class="form-control">
                    </div>
                    <div class="col">
                        Enter Father
                        <input type="text" name="f" class="form-control" placeholder="Enter Father">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        Enter Email
                        <input type="text" name="e" class="form-control">
                    </div>
                    <div class="col">
                        ENter Phone
                        <input type="text" name="ph" class="form-control">
                    </div>
                    <div class="col">
                        Gender
                        <input type="text" name="g" class="form-control" placeholder="Enter Father">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        Enter Country
                        <input type="text" name="c" class="form-control">
                    </div>
                    <div class="col">
                        Enter State
                        <input type="text" name="s" class="form-control">
                    </div>
                    <div class="col">
                        Enter City
                        <input type="text" name="ct" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        Enter Amount
                        <input type="text" name="a" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        
                        <center><input type="submit" name="submit" class="btn btn-success" value="Create Account"></center>
                    </div>
                </div>
                <br>
            </form>
            <br><hr>
            </div>
        </div>
    </body>
</html>