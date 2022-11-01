<html>


<?php

include 'function.php';

?>
<head>
    <title>SMS App</title>
    <link href="css/bootstrap.css" rel="stylesheet" />


    <style>
        #topDiv {
            background-color: 5837D0;
            padding-top: 20px;
            color: white;
        }
    </style>

</head>

<body>



    <div class="container">


        <div class="row" id="topDiv">
            <div class="col-sm-12">
                <h2>Student Management System</h2>
                <p>Your digital school</p>
            </div>
        </div>




        <div class="row">
            <div class="col-sm-4">
                1
            </div>
            <div class="col-sm-4">



            <img src="images/web-logo.png"  style="width: 150px;margin-top: 50px;"/>







            <h3>Login</h3>
                <form action="index.php" method="post">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIC</label>
                        <input type="text" name="nic" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" name="pword" class="form-control" >
                    </div>

                    <button type="submit"  name="btnSubmit" class="btn btn-primary">Login</button>

                </form>



                <?php
                if(isset($_POST['btnSubmit'])){

                    $nic = $_POST['nic'];
                    $pword = $_POST['pword'];
                    //connect to the database 

                    
                    $conn =   getDBConnection();
                    echo 'db connected';
                    $sql = "SELECT * FROM tbl_user WHERE nic = ' $nic' AND pword = '$pword' AND status_code = 'ACTIVE'";




                }
                
                
                
                ?>



            </div>
            <div class="col-sm-4">
                3
            </div>
        </div>
    </div>



</body>

</html>