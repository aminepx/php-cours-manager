<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="d-flex">
    <div class="container w-50">
    <h1 class="my-5 text-center"><?php echo $_GET['title'] ?></h1>
        <form action="charge.php" method="post" id="payment-form">
        <div class="form-row">

     <input name='lastName' type="text" class="form-control mb-3 stripeElement stripeElement--empty" placeholder="First Name">
     <input name='firstName' type="text" class="form-control mb-3 stripeElement stripeElement--empty" placeholder="Last Name">
     <input name='Email' type="email" class="form-control mb-3 stripeElement stripeElement--empty" placeholder="Email">


    <div id="card-element" class="form-control">
        <!-- A Stripe Element will be inserted here. -->
    </div>
    
    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
</div>

<button >Submit Payment</button>

</form>
<div class="container w-50">
<ul class="list-group col-md-8 offset-2 mt-5">
<li class="list-group-item">Price : <?php echo $cour['price'] ;?>€</li>
<li class="list-group-item">Description : <?php echo $cour['description'];?></li>
<li class="list-group-item">Time : <?php echo $cour['hours'];?> hours</li>
<li class="list-group-item">Date : <?php echo $cour['date'];?></li>
<li class="list-group-item">Creator : <?php echo $cour['creator'];?></li>
<li class="list-group-item">
   <a href="" class="btn btn-warning">buy now</a>
</li>
</ul>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>

</body>
</html>