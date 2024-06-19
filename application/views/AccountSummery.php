<html>
    <body bgcolor="blueviolet" text="white">
        <?php $this->load->view('Nav.php'); ?>
        <br><br>
        <center><h1><b>Welcome to Account Summery Page</b></h1></center>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="border: 2px solid gray";>
                <form method="post" action="">
                    Enter Account number
                    <input type="text" name="ac" class="form-control"><br>
                    Enter Pin
                    <input type="text" name="p" class="form-control"><br>
                    

                    <center><input type="submit" name="submit" class="btn btn-success" value="Account Summery"></center>
                </form>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="col-md-8">
                        <table class="table table-bordered table=stripped table-hover table-dark">
                            <tr>
                                <td>TID</td><td>Account</td><td>Amount</td><td>Date</td><td>Des</td>
                                <?php
                                if(isset($data)) {
                                    foreach($data as $row) {
                                        echo "<tr>
                                            <td>$row[id]</td>
                                            <td>$row[acno]</td>
                                            <td>$row[amount]</td>
                                            <td>$row[time]</td>
                                            <td>$row[type]</td>
                                        </tr>";
                                    }
                                }
                                ?>
                                
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>