<html>
    <head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> An About Us Page | CoderGirl </title>
    <!---Custom Css File!--->
    <link rel="stylesheet" href="style.css">
        <style type="text/css">
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
                body{
                    background: black;
                }
                #set_contact{
                    background: silver;
                    padding: 10px;
                }

                
        }
        </style>

    </head>
    <body>
        <?php 
        $this->load->view('Nav.php');
        ?>
        <div class="row" style="margin-top: 6%;">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="padding: 10px;">
                <div id="set_contact"><br>
                    <center><h6 class="orange-text" style="font-size: 20px">Seller Contact Information</h6>
                    <p class="white-text" style="font-size: 14px; margin-top: 0spx;">Fill This Form & Complete Our Profile Information</p>
                    </center>

                    <div class="row">
                        <div class="col">
                            Enter First Name
                            <input type="text" name="p" class="form-control" placeholder="Enter First Name" required>
                        </div>
                        <div class="col">
                            Enter Last Name
                            <input type="text" name="p" class="form-control" placeholder="Enter Last Name" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col" id="seller_address">
                            Enter Address
                            <textarea type="text" name="n" class="form-control" placeholder="Enter Address" required></textarea>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <select name="seller_city" required>
                                <option disabled selected>Select Your City</option>
                                <option>City</option>
                                    <option>Dehradun</option>
                                    <option>Dhampur</option>
                                    <option>Ajmer</option>
                                    <option>Bengaluru</option>
                                    <option>Mumbai</option>
                                    <option>Chennai</option>
                                    <option>Jaipur</option>
                                    <option>Kolkata</option>
                                    <option>Hyderabad</option>
                                    <option>Pune</option>
                                    <option>Bhopal</option>
                                    <option>Chennai</option>
                                    <option>Amritsar</option>
                                    <option>Lucknow</option>
                                    <option>Allahabad</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="seller_country" required>
                                <option disabled selected>Select Country</option>
                                <option>Country</option>
                                    <option>India</option>
                                    <option>USA</option>
                                    <option>Canada</option>
                                    <option>Sri Lanka</option>
                                    <option>Pakistan</option>
                
                            </select>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </body>
</html>