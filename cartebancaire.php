<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
    font-family: Arial;
    font-size: 17px;
    padding: 0px;
    margin: 0px;
}

* {
    box-sizing: border-box;
}

.row {
   display: flex;
   flex-wrap: wrap;
   margin: 0 -16px;
   margin-left: 20%;
   margin-top: 1%;
}

.col-25 {
    flex: 25%;
}

.col-50 {
    flex: 50%;
}

.col-75 {
    flex: 75%;
}

.col-25,
.col-50,
.col-75 {
    padding: 0 16px;
}

.container {
   background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
}

input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

label {
    margin-bottom: 10px;
    display: block;
}

.icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 30px;
}

.btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
}

.btn:hover {
    background-color: #45a049;
}

a {
    color: #2196F3;
}

hr {
    border: 1px solid lightgrey;
}

span.price {
    float: right;
    color: grey;
}

@media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
     margin-bottom: 20px;
    }
}
</style>
</head>
<body>
<?php require_once('user_session.php'); ?>

<div class="row">
  <div class="col-75">
    <div class="container">
    <form name="myForm" onsubmit="return validation()" action="success.php">
        <div class="row">
        

          <div class="col-50">
            <h2>Paiement</h2>
            <label for="fname">Moyen de paiement<span style="color:red">*</span></label>
            <div class="icon-container">
                    <input type="radio" name="type" value="visa" required> <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <input type="radio" name="type" value="amex"> <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <input type="radio" name="type" value="mastercard"> <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <input type="radio" name="type" value="discover"> <i class="fa fa-cc-discover" style="color:orange;"></i>
                    <input type="radio" name="type" value="discover"> <i class="fa fa-cc-paypal" style="color:rgb(31, 89, 247);"></i>
            </div>
            <label for="cname">Nom sur la carte<span style="color:red">*</span></label>
            <input type="text" id="cname" name="cardname" placeholder="Pierre Dupont" 
            required>
            <label for="ccnum">Numéro de la carte<span style="color:red">*</span></label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333" 
            maxlength="12" pattern="[0-9]{12}" required>
            <label for="expmonth">Mois d'expiration<span style="color:red">*</span></label>
            <input type="text" id="expmonth" name="expmonth" placeholder="02" 
            maxlength="2" pattern="[0-9]{2}" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">L'année d'expiration<span style="color:red">*</span></label>
                <input type="text" id="expyear" name="expyear" placeholder="2020" 
                maxlength="4" pattern="[2010-2030]{4}" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV<span style="color:red">*</span></label>
                <input type="text" id="cvv" name="cvv" placeholder="123" maxlength="3"
                pattern="[0-9]{3}" required>
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="checkbox" id="TC" name="TC" onchange="unlock()" required> J'ai lu et accepter les 
        <a href=" " onclick="terms()">Termes et Conditions</a >.<span style="color:red">*</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span style="color:red">*</span> Cases nécessaires a compléter pour terminer. 
 
        <input type="submit" id="btn" value="Valider le paiement" class="btn" >
      </form>
    </div>
  </div>
  <div class="col-25">
    
  </div>
</div>

<script src="js/termsconditions.js"></script>

</body>
</html>