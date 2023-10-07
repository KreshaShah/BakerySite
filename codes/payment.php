<?php

session_start();

$connect = mysqli_connect("localhost","root","","bakery");

if(isset($_POST['add_to_cart'])){

  if(isset($_SESSION['cart'])){
    $session_array_id = array_column($_SESSION['cart'],"id");


    if(!in_array($_GET['id'], $session_array_id)){

      $session_array = array(
      'id' => $_GET['id'],
      "name" => $_POST['name'],
      "price" => $_POST['price'],
      "quantity" => $_POST['quantity']
    );
    $_SESSION['cart'][] = $session_array;

    }

  }else{
    $session_array = array(
      'id' => $_GET['id'],
      "name" => $_POST['name'],
      "price" => $_POST['price'],
      "quantity" => $_POST['quantity']
    );
    $_SESSION['cart'][] = $session_array;
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{

    background-color: #eee;
}

.container{

    height: 100vh;

}


.card{
    border:none;
}

.form-control {
    border-bottom: 2px solid #eee !important;
    border: none;
    font-weight: 600
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #8bbafe;
    outline: 0;
    box-shadow: none;
    border-radius: 0px;
    border-bottom: 2px solid blue !important;
}



.inputbox {
    position: relative;
    margin-bottom: 20px;
    width: 100%
}

.inputbox span {
    position: absolute;
    top: 7px;
    left: 11px;
    transition: 0.5s
}

.inputbox i {
    position: absolute;
    top: 13px;
    right: 8px;
    transition: 0.5s;
    color: #3F51B5
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0
}

.inputbox input:focus~span {
    transform: translateX(-0px) translateY(-15px);
    font-size: 12px
}

.inputbox input:valid~span {
    transform: translateX(-0px) translateY(-15px);
    font-size: 12px
}

.card-blue{

    background-color: #492bc4;
}

.hightlight{

    background-color: #5737d9;
    padding: 10px;
    border-radius: 10px;
    margin-top: 15px;
    font-size: 14px;
}

.yellow{

    color: #fdcc49; 
}

.decoration{

    text-decoration: none;
    font-size: 14px;
}

.btn-success {
    color: #FFFFFF;
    background-color: #FFFFFF;
    border-color: #FFFFFF;
}

.btn-success:hover {
    color: #FFFFFF;
    background-color:#FFFFFF#FFFFFF;
    border-color: #FFFFFF;
}


.decoration:hover{

    text-decoration: none;
    color: #fdcc49; 
}</style>
  <title>Ae Halloo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<div class="container mt-5 px-5">

            <div class="mb-4">

                <h2>Confirm order and pay</h2>
            <span>  please make the payment, after that you can enjoy all the features and benefits.</span>
          <?php 

          $total = 0;
          
          $output = "";

          $output .= "

          <table class='table table-bordered table-striped'>
          <tr>
          <th>ID</th>
          <th>Item Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total Price</th>
          <th>Action</th>
          <tr>

          ";

          if(!empty($_SESSION['cart'])){

            foreach($_SESSION['cart'] as $key => $value){

              $output.="
              <tr>
    <td>".$value['id']."</td>
              <td>".$value['name']."</td>
              <td>".$value['price']."</td>
              <td>".$value['quantity']."</td>
              <td>".number_format($value['price']*$value['quantity'],2)."</td>
              <td><a href= 'cookies.php?action=remove&id=".$value['id']."'>
              <button class = 'btn btn-danger btn-block'>Remove</button>
              </a>
              </td>
              ";

              $total = $total + $value['quantity']= $value['price'];
            

            }

            $output .="
            <tr>
            <td colspan=3></td>
            <td></b>Total Price</b></td>
            <td>".number_format($total,2)."</td>
            <td>
            <a href = 'cookies.php?action=clearall'>
            <button class='btn btn-warning btn-block'>Clear</button>
            </a>
            </td>
            </tr>
            <tr>
            <td colspan=6>

            <a href = 'Login.html'>
            <button class='btn btn-warning btn-block'>Invoice</button>
            </a>

            </td>
            </tr>
            ";
            $total;  
          }
          $_SESSION["t"]= $total;
          echo $output;
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php

  if(isset($_GET['action'])){
    if($_GET['action']== "clearall"){
      unset($_SESSION['cart']);
    }

    if($_GET['action']=="remove"){

      foreach ($_SESSION['cart'] as $key => $value) {
        if($value['id'] == $_GET['id']){
          unset($_SESSION['cart'][$key]);
        }
      }
    }
  }
  ?>
                
            </div>

        <div class="row">

            <div class="col-md-8">
                

                <div class="card p-3">

                    <h6 class="text-uppercase">Payment details</h6>
                    <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Name on card</span> </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> 


                            </div>
                            

                        </div>

                        <div class="col-md-6">

                             <div class="d-flex flex-row">


                                 <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Expiry</span> </div>

                              <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>CVV</span> </div>
                                 

                             </div>
                            

                        </div>
                        

                    </div>



                    <div class="mt-4 mb-4">

                        <h6 class="text-uppercase">Billing Address</h6>


                        <div class="row mt-3">

                            <div class="col-md-6">

                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Street Address</span> </div>
                                

                            </div>


                             <div class="col-md-6">

                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>City</span> </div>
                                

                            </div>


                            

                        </div>


                        <div class="row mt-2">

                            <div class="col-md-6">

                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>State/Province</span> </div>
                                

                            </div>


                             <div class="col-md-6">

                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Zip code</span> </div>
                                

                            </div>


                            

                        </div>

                    </div>

                </div>


                <div class="mt-4 mb-4 d-flex justify-content-between">


                            <span>Previous step</span>


                            <a href="HomePage.php"><p style="color:black">Pay</a></button>


                            

                        </div>

            </div>

            <div class="col-md-4">

                <div class="card card-blue p-3 text-white mb-3">


                    <span><p style="color:black">Enjoy all the features and perk after you complete the payment</span>
                    <a href="#" class="yellow decoration">Know all the features</a>

                    <div class="hightlight">

                        <span>100% Guaranteed support and update for the next 5 years.</span>
                        

                    </div>
                    
                </div>
                
            </div>
            
        </div>
          

      </div>