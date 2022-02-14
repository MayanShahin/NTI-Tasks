<!doctype html>
<html lang="en">
<head>
    <title>Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
       <div class="input">
            <div class="col-12 m-auto">
                <h2 class="m-auto">BANK</h2></div>
                <div class="col-12 m-auto">
                <form method="post">
                    <div class="m-auto">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name"
                         value="<?php if (isset($name)) { echo $name;} ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="m-auto">
                        <label for="loan">Loan amount</label>
                        <input type="number" name="amount" id="amount" 
                        value="<?php if (isset($loan_amount)) {echo $loan_amount;} ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="m-auto">
                        <label for="loan-year">Loan year</label>
                        <input type="number" name="year" id="year" 
                        value="<?php if (isset($year)) {echo $year;} ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="m-auto">
                        <button name="calculate">calculate</button> </div>
                </form>
                <?php





if(isset
($Username, $interest, $Loan_with_interest, $installment_monthly)) 
?>

<div class="container">
    <div class="output">
            <div class="result">
                <table class="table">
                    <thead class="calculate-result">
                         <tr>
                            <th>Username</th>
                            <th>Interest</th>
                            <th>Loan with interest</th>
                            <th>monthly</th>
                         </tr>
                        </thead>
                        <tr>
                        <td>
                            <?php echo $Username ?>
                        </td>
                        <td>
                            <?php echo $interest ?> 
                         </td>
                        <td>
                            <?php echo $Loan_with_interest ?>
                        </td>
                        <td>
                            <?php echo $installment_monthly ?>
                         </td>
                        </tr>
                </table>
            </div>
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