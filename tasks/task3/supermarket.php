
<!doctype html>

<html lang="en">

<head>
    <title>Supermarket</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<?php

if ($_POST) {
    $name = $_POST["name"];
    $city = $_POST["city"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $product = $_POST["product"];

if ($city == "Cairo") {
    if ($total < 1000) {
         $discount = 0;
    } elseif ($total >= 1000 && $total < 3000) {
            $discount = 0.10;
    } elseif ($total >= 3000 && $total < 4500) {
            $discount = 0.15;
    } elseif ($total >= 4500) {
            $discount = 0.20;
    }
    $delivery_fees = "";
    $sub_total = $price * $quantity;
    $total = $sub_total;
    $Discount = $total * $discount;
    $total_after_discount = $total - $Discount;
    $All = $total_after_discount + $delivery_fees;
    
} else if ($city == "Giza"){
    if ($total < 1000) {
        $discount = 0;
   } elseif ($total >= 1000 && $total < 3000) {
           $discount = 0.10;
   } elseif ($total >= 3000 && $total < 4500) {
           $discount = 0.15;
   } elseif ($total >= 4500) {
           $discount = 0.20;
   }
    $delivery_fees = 30;
    $sub_total = $price * $quantity;
    $total = $sub_total;
    $Discount = $total * $discount;
    $total_after_discount = $total - $Discount;
    $All = $total_after_discount + $delivery_fees;
    }
 else if ($city == "Alex") {

 if ($total < 1000) {
            $discount = 50;
        } elseif ($total>= 1000 && $total< 3000) {
            $discount = 0.10;
    } elseif ($total>= 3000 && $total< 4500) {
            $discount = 0.15;
    } elseif ($total>= 4500) {
            $discount = 0.20;
    }
        $delivery_fees = 50;
        $sub_total = $price * $quantity;
        $total = $sub_total;
        $Discount = $total * $discount;
        $total_after_discount = $total - $Discount;
        $All = $total_after_discount + $delivery_fees;



    } else if ($city == "Other") {
            if ($total < 1000) {
                $discount = 0;
            } elseif ($total>= 1000 && $total< 3000) {
                $discount = 0.10;
        } elseif ($total>= 3000 && $total< 4500) {
                $discount = 0.15;
        } elseif ($total>= 4500) {
                $discount = 0.20;
        }
        $delivery_fees = 100;
        $sub_total = $price * $quantity;  
        $total = $sub_total;                
        $Discount = $total * $discount;            
        $total_after_discount = $total - $Discount;        
        $All = $total_after_discount + $delivery_fees;   
    }
}

?>
<body>
    <div class="container">
        <div class="input">
            <div class="col-12 m-auto">
                <h2 class="m-6 text-danger">Super market</h2>
            </div>
            <div class="col-12 m-auto">
            <form method="post">
            <div class="m-auto">
            <div class="col-12">
                <form method="post">
                    <div class="data">
                        <label for="name">user name</label>
                        <input type="text" class="form-control m-auto" placeholder="">
                    </div>

     <div class="data">
         <label for="city">city</label>
         <select class=" m-auto form-control" name="city">
         <option value="city"></option>
         <option value="cairo">Cairo</option>
         <option value="Giza">Giza</option>
         <option value="Alex">Alexandria</option>
         <option value="Others">Others</option>
            </select>
            </div>
             <div class="data m-auto ">
             <label for="product">Number of varieties</label>
             <input type="number" name="number" class="form-control" placeholder="">
                    </div>
              <div class="data m-auto">
             <button name="product" class="m-2 btn-danger"> Enter your products </button>
             </div>
    </div>
    </div>
    <div class=" col-8">
    <form method="post">
 <div class="data m-auto ">
        <label for="price">Total Price</label>
        <input type="number" class="form-control m-auto" placeholder="">
     </div>
     </form>
        </div>
        <div class=" col-8">
            <form method="post">
            <div class="data m-auto ">
        <label for="quantity">Quantities</label>
        <input type="number" name="amount" class="form-control m-auto" placeholder="">

             </div>
          </form>
      </div>
    </div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>