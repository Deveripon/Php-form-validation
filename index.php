

<?php

include_once "./data.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Ecommerce-product data</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>
   

<div class="container">
    <div class="row">

    <?php foreach ($decoded_json as $product):?>

        <div class="col-md-3 my-5">
            <div class="card my-3 shadow">
                <img style=" object-fit: cover" src=" <?php echo $product -> photo ?> " alt="">
                <div class="card-body">
                    <h4><?php echo $product-> name ?></h4>
                    <h6> <?php echo $product -> price ?></h6>
                </div>
            </div>
        </div>

        <?php endforeach; ?>




    </div>
</div>













<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>