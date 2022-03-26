<?php

include_once './functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Form Validation</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">

        <div class="col-md-4">

            <div class="card my-5 shadow">
                <div class="card-body">
                    <h5>Creat an Account</h5>
                    <form action="" method="POST">


                        <div class="mb-3">
                            <label  class="form-label;"for="">Name</label>
                            <input name="Name" class="form-control"; type="text">
                        </div>


                        <div class="mb-3">
                            <label class="form-label;" for="">Age</label>
                            <input name="age" class="form-control"; type="number">
                        </div>


                        <div class="mb-3">
                            <label class="form-label;" for="">Gender</label>
                          <input type="text" name="Gender" id="" class="form-control">
                        </div>


                        <div class="mb-3">
                           <input name="Submit" class="btn btn-primary" type="submit" value="Calculate">
                        </div>                  

                    </form>
                </div>
                     
                <div class="card-footer">

                <?php
                   
                   $name =  $_POST['Name'];
                   $age =  $_POST['age'];
                   $gender =  $_POST['Gender'];


                    if (empty($gender) || empty($name) || empty($age)){

                        echo " <p class=' alert alert-danger;> All feilds are required. PLease Fill up ALL FEILDS </p>";

                    }else{
                         echo  marraige_age_calc($name,$age ,$gender); 
                    }
             
                
                ?>
                </div>
            </div>

        </div>





        </div>
    </div>












<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>